<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Bill;
use App\Entities\CategoriesCourse;
use App\Entities\Category;
use App\Entities\Registers;
use App\Entities\Account;
use App\Notifications\NewCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AbstractController;
use Exception;
use App\Entities\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

abstract class BaseController extends AbstractController
{
    /**
     * Default message
     * @var array
     */
    protected $e = [
        'status' => true,
        'message' => null,
    ];


    protected function doRequest(
        $router,
        $title_success,
        Request $request,
        callable $callback,
        $successMessage = null
    )
    {
        DB::beginTransaction();
        try {
            $this->e['message'] = $successMessage ?: __('common.actions.successfully');
            if (is_callable($callback)) {
                call_user_func_array($callback, [$request]);
            }
            DB::commit();
            \Alert::success(__('messages.success.success'), __('messages.success.' . $title_success . '_success'));
            return redirect($router);
        } catch (Exception $e) {
            \Alert::error(__('messages.error.oops'), $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * @param $value
     * @return string
     */
    protected function showStatus($value)
    {
        return ($value == 1) ? '<div class="btn btn-sm btn-success">' . __('admin.statusTable.on') . '</div>' : '<div class="btn btn-sm btn-danger">' . __('admin.statusTable.off') . '</div>';
    }

    protected function showStatusContact($value)
    {
        $data = '';
        if ($value == 1) {
            $data = '<div class="btn btn-sm btn-warning">' . __('admin.statusContact.not-contact') . '</div>';
        } elseif ($value == 2) {
            $data = '<div class="btn btn-sm btn-success">' . __('admin.statusContact.contact-success') . '</div>';
        } elseif ($value == 3) {
            $data = '<div class="btn btn-sm btn-danger">' . __('admin.statusContact.not-success') . '</div>';
        }

        return $data;
    }

    /**
     * @param $url1
     * @param $id
     * @param $name
     * @param $url2
     * @return string
     */
    protected function actionData($url1, $id, $name, $url2)
    {
        $html = '<a href="' . $url1 . '" class="btn btn-sm btn-primary" style="float: left; margin-right: 5px"><i class="fa fa-eye"></i></a>';
        $html .= ' <div class=""><button type="button"  class="btn btn-sm btn-outline-primary btn-rounded btn-icon"  data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                  <i class="mdi mdi-dots-vertical"></i> </button>
                  <ul class="dropdown-menu" x-placement="left-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-162px, 0px, 0px);">
                        <li><a class="dropdown-item" href="' . $url1 . '">Đăng nhập lại</a></li>
                        <li><a class="dropdown-item" data-toggle="modal"  data-target="#deleteData-' . $id . '">' . __('messages.manage_photo.delete') . '</a> </li>
                   </ul>
                   </div>';
        $html .= ' <div class="modal fade" id="deleteData-' . $id . '" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document">
                   <div class="modal-content">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                                <div class="text-center"><i class="fas fa-info-circle fa-3x text-info"></i> <h4 class="mt-2">' . __('messages.manage_photo.delete') . '</h4>
                                <br>
                                <p class="mt-3 text-word"> ' . __('messages.header.title_delete') . '</p>
                           </div>
                          </div>
                          <div class="modal-footer justify-content-center">
                               <form method="get" action="' . $url2 . '">
                                        <button id="update_link" class="btn btn-danger my-2">' . __('messages.property.continue') . '</button>
                               </form>
                                <button type="button" class="btn btn-info my-2" data-dismiss="modal">' . __('messages.booking_my.cancel') . '</button>
                          </div>
                    </div>
                   </div>
                   </div>';
        return $html;
    }

    /**
     * @param $value
     * @return string
     */
    protected function checkboxData($value)
    {
        $html = '<div class="custom-controls-stacked">
                       <label class="custom-control custom-checkbox">
                             <input type="checkbox" class="custom-control-input idDelete" name="idDelete[]" value="' . $value . '">
                                <span class="custom-control-label"></span>
                       </label>
                 </div>';
        return $html;
    }

    /**
     * @param $value
     */
    protected function showCategory($value)
    {
        $category = explode('|', $value);
        $data = Category::whereIn('id', $category)->get();
        $html = "<div class='category-list'>";
        $html .= "<ul>";
        foreach ($data as $cate):
            $html .= '<li><a href="">' . $cate->name . '</a></li>';
        endforeach;
        $html .= "</ul>";
        $html .= "</div>";
        return $html;
    }


    public function getHot($value, $is_hot)
    {
        $hot = ($is_hot == 1) ? 'is-active' : "";
        $html = '<div class="featured-icon">
                    <div class="btn-show-home home-' . $value . ' ' . $hot . '" data-id="' . $value . '" onclick="return clickHot(`' . $value . '`)"><i class="fas fa-star"></i>
                     <div class="spin-' . $value . ' spinner-border text-info hide" role="status"> <span class="sr-only">Loading...</span></div>
                    </div>
               </div>';
        return $html;
    }

    /**
     * @param $value
     * @param $status
     * @return string
     */
    public function StatusAjax($value, $status)
    {
        $status1 = ($status == 1) ? 'btn-success' : "btn-danger";
        $view = ($status == 1) ? 'update' : 'remove';
        $tt = ($status == 1) ? __('admin.statusTable.on') : __('admin.statusTable.off');
        $html = '<div style="position: relative" class="btn-table" onclick="return clickStatus(`' . $value . ',' . $view . '`)">
                    <span class="btn btn-sm ' . $status1 . ' status-' . $value . '" data-id="' . $value . '"><span class="spinner-border text-info hide size button-' . $value . '" role="status" aria-hidden="true"></span>' . $tt . '</div>
                </div>';
        return $html;
    }

    /**
     * @param $value
     * @return string
     */
    protected function showStatusOrder($value)
    {
        return ($value == 1) ? '<div class="btn btn-sm btn-success">' . __('admin.orders.success') . '</div>' : '<div class="btn btn-sm btn-danger">' . __('admin.orders.error') . '</div>';
    }

}
