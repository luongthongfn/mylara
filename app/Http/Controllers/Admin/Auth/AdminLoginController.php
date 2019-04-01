<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminRedirectIfAuthenticated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guestAdmin:admins')->except('logout');
    }


    protected $redirectTo = '/admin/home';
    public function username()
    {
        return 'name';
    }
    public function guard()
    {
        return Auth::guard('admins');
    }



    public function showLoginForm()
    {
        return view('admin/login');
    }

    protected function loggedOut()
    {
        return redirect('/admin/login');
    }


}
