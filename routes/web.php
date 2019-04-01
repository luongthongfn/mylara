<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('{all?}', function () {
//     return view('welcome');
// })->where('all', '(.*)');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', 'Mycontroller@info');

// view================================================

Route::get('/view', function () {
    return view('layout/master');
});
// --------------------------------------------------------
// --------------------------------------------------------
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// --------------------------------------------------------
// --------------------------------------------------------


Route::post('/logout', 'Admin\Auth\AdminLoginController@logout')->name('logout');
Route::group(['prefix' => '/admin'], function () {
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin/login');
    Route::post('/postLogin', 'Admin\Auth\AdminLoginController@login')->name('admin/postLogin');

    Route::get('/register', 'Admin\Auth\AdminRegisterController@showRegistrationForm')->name('admin/register');;
    Route::post('/postRegister', 'Admin\Auth\AdminRegisterController@register')->name('admin/postRegister');


    Route::get('/', 'Admin\AdminController@index');
    Route::get('/home', 'Admin\AdminController@index');
});


