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
    Route::get('/','Admin\AdminController@index')->middleware('login');
    Route::get('create','Admin\AdminController@create')->middleware('login');
    Route::post('store','Admin\AdminController@store')->middleware('login');
    Route::get('edit/{id}','Admin\AdminController@edit')->middleware('login');
    Route::post('update/{id}','Admin\AdminController@update')->middleware('login');
    Route::get('destory/{id}','Admin\AdminController@destory')->middleware('login');
    Route::get('/redis','Admin\AdminController@redis')->middleware('login');
    Route::get('/tui','Admin\AdminController@tui')->middleware('login');
});
Route::prefix('/login')->group(function(){
    Route::get('/','Login\LoginController@index');
    Route::post('login_do','Login\LoginController@login_do');
});
Route::prefix('/images')->group(function(){
    Route::get('/','Images\ImagesController@index');
    Route::post('Images_do','Login\ImagesController@images_do');
});





