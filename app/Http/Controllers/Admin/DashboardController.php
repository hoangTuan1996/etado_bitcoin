<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    //show trang chủ
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function showUser()
    {
        return view('admin.users.view');
    }
}
