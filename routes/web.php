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

Route::get('/get', function () {

    $id = '58IkVCh3hWU';
    $dt = file_get_contents("http://www.youtube.com/get_video_info?video_id=$id&el=embedded&ps=default&eurl=&gl=US&hl=en");
    $x = explode("&", $dt);
    $t = array(); $g = array(); $h = array();
    echo "<pre>rn";
    foreach ($x as $r) {
        $c = explode("=", $r);
        $n = $c[0]; $v = $c[1];
        $y = urldecode($v);
        $t[$n] = $v;
    }
    $streams = explode(',', urldecode($t['url_encoded_fmt_stream_map']));
    foreach ($streams as $dt) {
        $x = explode("&", $dt);
        foreach ($x as $r) {
            $c = explode("=", $r);
            $n = $c[0]; $v = $c[1];
            $h[$n] = urldecode($v);
        }
        $g[] = $h;
    }
    print_r($g);
    echo "rn</pre>";
});

Route::get('/view', function () {
    return view('layout/master');
});

// --------------------------------------------------------
// --------------------------------------------------------
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// --------------------------------------------------------
// --------------------------------------------------------

Route::post('/logout', 'Admin\Auth\AdminLoginController@logout')->name('logout');

Route::get('admin/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('admin/login');
Route::post('admin/postLogin', 'Admin\Auth\AdminLoginController@login')->name('admin/postLogin');

Route::get('admin/register', 'Admin\Auth\AdminRegisterController@showRegistrationForm')->name('admin/register');
Route::post('admin/postRegister', 'Admin\Auth\AdminRegisterController@register')->name('admin/postRegister');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['authAdmin:admins']], function () {

    Route::get('/', 'AdminController@index');
    Route::get('/home', 'AdminController@index');




    Route::resource('/category', 'CategoryController');

});
