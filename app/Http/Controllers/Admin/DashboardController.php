<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends AdminController
{

    //show trang chủ
    public function index()
    {
        return view('admin.dashboard.index');
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
