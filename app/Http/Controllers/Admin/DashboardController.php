<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Account;
use App\Entities\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{

    //show trang chủ
    public function index()
    {

        if (Auth::guard('admin')->user()->can('admin')) {
            $data['count_users'] = Admin::where('id', '!=', Auth::guard('admin')->user()->id)->count();
            $data['count_accounts'] = Account::count();
        } else {
            $data['count_accounts'] = Account::where('admin_id', Auth::guard('admin')->user()->id)->count();
        }
        return view('admin.dashboard.index')->with($data);
    }

    //show user key network
    public function showUser()
    {
        return view('admin.users-key.view');
    }

    //show profile user

    public function showUserProfile()
    {
        return view('admin.users-key.view-profile');
    }

    //show user
    public function showUserLogin()
    {
        return view('admin.users.list');
    }
}
