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

Route::get('/', function () {
//    echo '111';die;
    return view('welcome');
});
Route::get('/opo', function () {
    echo '11111';die;
});
Route::prefix('/admin')->group(function(){
    Route::get('/','Admin\AdminController@index');
    Route::get('create','Admin\AdminController@create');
    Route::post('store','Admin\AdminController@store');
    Route::get('edit/{id}','Admin\AdminController@edit');
    Route::post('update/{id}','Admin\AdminController@update');
    Route::get('destory/{id}','Admin\AdminController@destory');
});
Route::prefix('/login')->group(function(){
    Route::get('/','Login\LoginController@index');
    Route::post('login_do','Login\LoginController@login_do');
});



