<?php

use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UsersDataController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/', "App\Http\Controllers\HomeController@index");

Route::get('/admin', function(){ // Admin panel still under development
    return view('admin.index'); 
})->middleware('admin');

Auth::routes();

Route::resource('/admin/pages', PagesController::class)->middleware('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/users', UsersController::class)->middleware('admin');

Route::resource('/admin/changeuserdata', UsersDataController::class)->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/blog', BlogController::class)->middleware('admin');
