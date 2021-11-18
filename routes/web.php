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

Route::patch('/admin/info/update1/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update1');
Route::patch('/admin/info/update2/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update2');
Route::patch('/admin/info/update3/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update3');
Route::patch('/admin/info/update4/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update4');
Route::patch('/admin/info/update5/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update5');
Route::patch('/admin/info/update6/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update6');
Route::patch('/admin/info/update7/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update7');
Route::patch('/admin/info/update8/{id}', 'App\Http\Controllers\Admin\AdminInfoController@update8');

Route::delete('/admin/info/delete/{id}', 'App\Http\Controllers\Admin\AdminInfoController@destroy');

//
Route::post('/search1', 'App\Http\Controllers\Admin\AdminInfoController@search1');
Route::post('/search2', 'App\Http\Controllers\Admin\AdminInfoController@search2');
Route::post('/search3', 'App\Http\Controllers\Admin\AdminInfoController@search3');
Route::post('/search4', 'App\Http\Controllers\Admin\AdminInfoController@search4');
Route::post('/search5', 'App\Http\Controllers\Admin\AdminInfoController@search5');
Route::post('/search6', 'App\Http\Controllers\Admin\AdminInfoController@search6');
Route::post('/search7', 'App\Http\Controllers\Admin\AdminInfoController@search7');
Route::post('/search8', 'App\Http\Controllers\Admin\AdminInfoController@search8');

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
