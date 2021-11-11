<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InsertContentController;
use App\Http\Controllers\UserController;

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


//Handle route info
Route::get('/admin/info/create', 'App\Http\Controllers\Admin\AdminInfoController@create');
Route::post('/admin/info/store', 'App\Http\Controllers\Admin\AdminInfoController@store');

Route::get('/admin/info', 'App\Http\Controllers\Admin\AdminInfoController@index');
Route::get('/admin/info/{id}', 'App\Http\Controllers\Admin\AdminInfoController@show');

Route::get('/admin/info/edit/{id}', 'App\Http\Controllers\Admin\AdminInfoController@edit');
Route::patch('/admin/info/update/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update');

Route::delete('/admin/info/delete/{id}', 'App\Http\Controllers\Admin\AdminInfoController@destroy');


//Auth route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//
Route::get('/homeadmin', function () {
    return view('/admin/home_admin');
});

Route::get('/forum', 'App\Http\Controllers\ForumController@show');

Route::get('index', [InsertContentController::class, 'index']);
Route::post('add', [InsertContentController::class, 'add']);

Route::get('/account', 'App\Http\Controllers\ViewAccountController@show');
Route::patch('/account/{id}', 'App\Http\Controllers\RePassController@update');
Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');
