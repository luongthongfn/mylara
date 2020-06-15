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
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// --------------------------------------------------------
// --------------------------------------------------------

Route::get('/upload', 'UploadTest@getUpload')->name('getUpload');
Route::post('/upload', 'UploadTest@postUpload')->name('postUpload');

Route::get('/demo', function() {
    return view('vendor.laravel-filemanager.demo');
});

Route::post('/logout', 'Admin\Auth\AdminLoginController@loggedOut')->name('logout');

Route::get('admin/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin/login');
// Route::get('login', ['as' =>'login'], function () {
//     auth('authAdmin:admins')->loginUsingId(1);
//     return redirect()->intended();
// });
Route::post('admin/postLogin', 'Admin\Auth\AdminLoginController@login')->name('admin/postLogin');

Route::get('admin/register', 'Admin\Auth\AdminRegisterController@showRegistrationForm')->name('admin/register');
Route::post('admin/postRegister', 'Admin\Auth\AdminRegisterController@register')->name('admin/postRegister');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['authAdmin:admins']], function () {

    Route::get('/', 'AdminController@index');
    Route::get('/home', 'AdminController@index');




    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');

});

// MediaManager
// ctf0\MediaManager\MediaRoutes::routes();
// Auth::routes();