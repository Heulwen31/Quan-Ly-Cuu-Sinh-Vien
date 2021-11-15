<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InsertContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewAccountController;

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


//Student info
Route::get('/student/info', 'App\Http\Controllers\Student\StudentController@index');
Route::get('/student/info/{id}', 'App\Http\Controllers\Student\StudentController@show');


//Auth route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//
Route::get('/homestudent', function () {
    return view('student/overview');
});


//
Route::get('/forum', 'App\Http\Controllers\ForumController@show');
Route::get('/forumstudent', 'App\Http\Controllers\ForumController@showStudent');


//
Route::get('index', [InsertContentController::class, 'index']);
Route::get('indexstudent', [InsertContentController::class, 'indexStudent']);
Route::post('add', [InsertContentController::class, 'add']);
Route::post('addstudent', [InsertContentController::class, 'addStudent']);


Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');


//
Route::get('/account', 'App\Http\Controllers\ViewAccountController@show');
Route::get('/accountstudent', 'App\Http\Controllers\ViewAccountController@showStudent');

Route::patch('/save/{id}', 'App\Http\Controllers\ViewAccountController@save');
Route::patch('/savestudent/{id}', 'App\Http\Controllers\ViewAccountController@saveStudent');
Route::patch('/account/{id}', 'App\Http\Controllers\RePassController@update');



/**
 * view
 */
Route::get('home', [ChartController::class, 'statistic']);
