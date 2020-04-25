<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Admin;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $admin = Admin::where('email', $request->email)->where('status', 0)->first();
        $remember = $request->has('remember') ? true : false;
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (is_object($admin) == null) {
            if (Auth::guard('admin')->attempt($credentials, $remember)) {
                return \Redirect::route('admin.dashboard');
            } else {
                Session::flash('error', 'Email hoặc mật khẩu không đúng !!!');
                return redirect()->back();
            }
        } else {
            Session::flash('error', 'Tài khoản của bạn không hoạt động !!!');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->back();
    }

}
