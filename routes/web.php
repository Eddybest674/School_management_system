<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;


//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', [Authcontroller::class, 'login']);
Route::post('login', [Authcontroller::class, 'AuthLogin']);
Route::get('logout', [Authcontroller::class, 'logout']);
Route::get('forgot-password', [Authcontroller::class, 'forgotpassword']);
Route::post('forgot-password', [Authcontroller::class, 'PostForgotPassword']);
Route::get('reset/{token}', [Authcontroller::class, 'reset']);
Route::post('reset/{token}', [Authcontroller::class, 'PostReset']);






//Route::get('admin/admin/list', function () {
  //  return view('admin.admin.list');
//});












Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/add', [AdminController::class, 'add']);
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    
    
    
    
});













Route::group(['middleware' => 'teacher'], function(){
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);

});


Route::group(['middleware' => 'student'], function(){
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);

});


Route::group(['middleware' => 'parent'], function(){
    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});