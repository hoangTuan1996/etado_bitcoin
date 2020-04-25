<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Admin;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;
use App\Jobs\Admin\StoreJob;
use App\Jobs\Admin\UpdateJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Repositories\AdminRepositoryEloquent;

class AdminController extends BaseController
{
    public function index()
    {
        if (\Auth::guard('admin')->user()->can('user-list')) {
//            dd(1);
            return view('admin.users.list');
        } else {
            abort(403);
        }
    }

    public function store(StoreRequest $request)
    {
        if (\Auth::guard('admin')->user()->can('user-create')) {
            return $this->doRequest('/admin/users', 'added', $request, function ($params) {
                $this->dispatchNow(new StoreJob($params));
            });
        } else {
            abort(403);
        }
    }

    public function edit($id)
    {
        $data['user'] = Admin::where('id', $id)->where('status', config('model.status.on'))->first();
        return view('admin.users.edit')->with($data);
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if (\Auth::guard('admin')->user()->can('user-edit')) {
            $admin = Admin::where('id', $id)->first();
            return $this->doRequest('admin/users', 'edited', $request, function ($params) use ($admin) {
                $this->dispatchNow(new UpdateJob($admin,$params));
            });
        } else {
            abort(403);
        }
    }

    /**
     * @param $id
     * @param AdminRepositoryEloquent $repositoryEloquent
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id, AdminRepositoryEloquent $repositoryEloquent)
    {
        if (\Auth::guard('admin')->user()->can('user-delete')) {
            $repositoryEloquent->delete($id);
            \Alert::success(__('messages.success.success'), __('messages.success.deleted_success'));
            return redirect()->back();
        } else {
            abort(403);
        }
    }

    public function anyData()
    {
        $users = Admin::orderBy('id', 'DESC')->get();
        return DataTables::of($users)->editColumn('status', function ($users) {
            return $this->showStatus($users->status);
        })->addColumn('checkbox', function ($users) {
            return $this->checkboxData($users->id);
        })->addColumn('images', function ($users) {
            return '<div class="avatar-table"><img src="' . $users->avatar . '" alt="' . $users->name . '"></div>';
        })->addColumn('action', function ($users) {
            return $this->actionData(route('admin.users.edit', $users->id), $users->id, $users->name, route('admin.users.delete', $users->id));
        })->rawColumns(['checkbox', 'status', 'action', 'images'])->escapeColumns([])->make(true);
    }

    public function destroy(Request $request)
    {
        if (\Auth::guard('admin')->user()->can('user-delete')) {
            try {
                $id_args = $request->get('id');
                Admin::whereIn('id', $id_args)->delete();
                return response()->json([
                    'success' => true,
                    'message' => __('messages.success.deleted_success')
                ]);
            } catch (\Exception $e) {
                \Alert::error(__('messages.error.oops'), $e->getMessage());
                return redirect()->back();
            }
        } else {
            abort(403);
        }

    }
}
