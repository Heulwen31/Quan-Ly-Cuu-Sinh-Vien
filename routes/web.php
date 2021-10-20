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
    return view('/auth/login');
});

Route::get('/admin/info/create', 'App\Http\Controllers\Admin\AdminInfoController@create')->middleware('acceptedit::class');
Route::post('/admin/info/store', 'App\Http\Controllers\Admin\AdminInfoController@store');

Route::get('/admin/info', 'App\Http\Controllers\Admin\AdminInfoController@index');
Route::get('/admin/info/{id}', 'App\Http\Controllers\Admin\AdminInfoController@show');

Route::get('/admin/info/edit/{id}', 'App\Http\Controllers\Admin\AdminInfoController@edit');
Route::patch('/admin/info/update/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update');

Route::delete('/admin/info/delete/{id}', 'App\Http\Controllers\Admin\AdminInfoController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
