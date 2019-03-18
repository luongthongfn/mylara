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

Route::get('/test', function () {
    echo "test router";
});

Route::get('/info', 'Mycontroller@info');

Route::get('/model/one-one-1/{id}', function ($id) {
    $data = App\models\Product::find($id)->productImage()->get()->toArray();
    // $data = App\models\Product::select('id', 'name')->get()->toArray();
    // $data = DB::table('product')->where('price', '>', 10)->get();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});

Route::get('/model/one-one-2/{id}', function ($id) {
    $data = App\models\Images::find($id)->images()->get()->toArray();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});

Route::get('/model/many-many-1/{id}', function ($id) {
    $data = App\models\car::find($id)->car()->get()->toArray();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});

Route::get('/model/many-many-2/{id}', function ($id) {
    $data = App\models\color::find($id)->color()->get()->toArray();
    // $data = App\models\color::select('name')->get();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});

// view================================================

Route::get('/view', function () {
    return view('layout/master');
});
Route::get('/view/form', function () {
    return view('layout/form');
});
Route::post('/view/form', ['as' => '/view/postForm', 'uses' => 'formController@form1']);

Route::get('/login', function () {
    return view('layout/login');
});
Route::post('/login', ['as' => 'postLogin', 'uses' => 'formController@login']);
