<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Account;
use App\Entities\Admin;
use App\Http\Requests\Account\StoreRequest;
use App\Http\Requests\Account\UpdateRequest;
use App\Jobs\Account\StoreJob;
use App\Jobs\Account\UpdateJob;
use App\Repositories\AccountRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Repositories\AdminRepositoryEloquent;

class AccountController extends BaseController
{
    public function index()
    {
        $data['admin'] = Auth::guard('admin')->user();
        $data['accounts'] = Account::where('admin_id', $data['admin']->id)->get();
        return view('admin.account.view')->with($data);
    }

    public function store(StoreRequest $request)
    {
//        dd($request->all());
        return $this->doRequest('/admin/accounts', 'added', $request, function ($params) {
            $this->dispatchNow(new StoreJob($params));
        });
    }

    public function edit($id)
    {
//        $data['user'] = Admin::where('id', $id)->where('status', config('model.status.on'))->first();
//        return view('admin.account.view-profile')->with($data);
        return view('admin.account.view-profile');
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $admin = Admin::where('id', $id)->first();
        return $this->doRequest('admin/users', 'edited', $request, function ($params) use ($admin) {
            $this->dispatchNow(new UpdateJob($admin, $params));
        });
    }

    /**
     * @param $id
     * @param AccountRepositoryEloquent $repositoryEloquent
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id, AccountRepositoryEloquent $repositoryEloquent)
    {

        $repositoryEloquent->delete($id);
        \Alert::success(__('messages.success.success'), __('messages.success.deleted_success'));
        return redirect()->back();
    }

    public function anyData()
    {
        $account = Account::where('admin_id', Auth::guard('admin')->user()->id)->orderBy('id', 'DESC')->get();
        return DataTables::of($account)->editColumn('status', function ($account) {
            return $this->showStatus($account->status);
        })->addColumn('checkbox', function ($account) {
            return $this->checkboxData($account->id);
        })->addColumn('type_account', function ($account) {
            return $this->showType($account->type);
        })->addColumn('action', function ($account) {
            return $this->actionData(route('admin.accounts.edit', $account->id), $account->id, $account->name, route('admin.accounts.delete', $account->id));
        })->rawColumns(['checkbox', 'status', 'action'])->escapeColumns([])->make(true);
    }

    public function destroy(Request $request)
    {
        if (\Auth::guard('admin')->user()->can('user-delete')) {
            try {
                $id_args = $request->get('id');
                Account::whereIn('id', $id_args)->delete();
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

    protected function showType($value)
    {
        return ($value != config('model.account.ref')) ? 'Nick chính' : 'Nick phụ';
    }
}
