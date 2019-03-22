<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminAuth;

class AdminController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware(AdminAuth::class, ['except' => 'getLogout']);
    // }

    public function index()
    {
        // echo "admin";
        return view('admin/home');
    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }



}
