<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminAuth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('authAdmin:admins');
    // }

    public function index()
    {
        return view('admin/home');
    }
}
