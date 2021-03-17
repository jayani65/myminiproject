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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::post('/profile',[App\Http\Controllers\UserController::class, 'postprofile'])->name('user.postprofile');
