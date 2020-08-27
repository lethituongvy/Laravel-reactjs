<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
/// ROUTE FOR LOVECONTROLLER
Route::get('/admin/love/index',"Admin\LoveController@index");
Route::get('/admin/love/form',"Admin\LoveController@form");
Route::post('/admin/love/create',"Admin\LoveController@store");
Route::delete('/admin/love/{id}',"Admin\LoveController@destroy");
Route::get('/admin/love/{id}/edit',"Admin\LoveController@edit");
Route::patch('/admin/love/{id}',"Admin\LoveController@update");

/// ROUTE FOR CATEGORYCONTROLLER
Route::get('/admin/category/index',"Admin\CategoryController@index");
Route::get('/admin/category/create',"Admin\CategoryController@addCategory");
Route::get('/admin/category/{id}/edit',"Admin\CategoryController@edit");
Route::post('/admin/category/index','Admin\CategoryController@store');
Route::patch('/admin/category/{id}',"Admin\CategoryController@update");
Route::delete('/admin/category/index/{id}','Admin\CategoryController@delete');

// ROUTE FOR SHOW LOVE AND SHOW DETAIL
Route::get('/api/love','User\LoveController@index');
Route::get('/api/love/{id}','User\LoveController@show');