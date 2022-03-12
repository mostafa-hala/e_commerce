<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\RoleController;
use App\Http\Controllers\ADMIN\UserController;

use App\Http\Controllers\ADMIN\ProductController;
use App\Http\Controllers\ADMIN\CategoryController;
use App\Http\Controllers\ADMIN\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('dashboard' , [DashboardController::class , 'index'])->middleware('auth' , 'isAdmin')->name('admin');
Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){
    Route::get('/' , [DashboardController::class , 'index']);
     route::resource('/roles',RoleController::class);
     route::resource('/prods',ProductController::class);
     route::resource('/cates',CategoryController::class);
    Route::resource('/users',UserController::class);

});

