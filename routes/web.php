<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
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
Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', UserController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('/profile',[App\Http\Controllers\UserController::class, 'postprofile'])->name('user.postprofile');
    Route::get('/password/change',[App\Http\Controllers\UserController::class, 'getPassword'])->name('userGetpassword');
    Route::post('/password/change',[App\Http\Controllers\UserController::class, 'postPassword'])->name('userpostpassword');
   
   
});

Route::get('/getAllPermission',[App\Http\Controllers\PermissionController::class, 'getAllPermissions']);
Route::post('/postRole',[App\Http\Controllers\RoleController::class,'store']);
Route::get('/getAllUsers',[App\Http\Controllers\UserController::class, 'getAll']);
Route::get('/getAllRoles',[App\Http\Controllers\RoleController::class, 'getAll']);
Route::get('/getAllPermissions',[App\Http\Controllers\PermissionController::class, 'getAll']);
Route::post('/account/create',[App\Http\Controllers\UserController::class,'store']);