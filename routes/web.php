<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function(){
    Route::get('/',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/login',[App\Http\Controllers\AdminController::class,'login']);
    //Category
    Route::get('/create_category',[App\Http\Controllers\CategoryController::class,'create_category']);
    Route::post('/save_category',[App\Http\Controllers\CategoryController::class,'save_category']);
    Route::get('/view_category',[App\Http\Controllers\CategoryController::class,'view_category']);
    Route::get('/view_category/active_category/{category_id}',[App\Http\Controllers\CategoryController::class,'active_category']);
    Route::get('/view_category/unactive_category/{category_id}',[App\Http\Controllers\CategoryController::class,'unactive_category']);
    Route::get('/update_category/{category_id}',[App\Http\Controllers\CategoryController::class,'update_category']);
    Route::post('saveUpdate/{category_id}',[App\Http\Controllers\CategoryController::class,'saveUpdate_category']);
    Route::get('delete_category/{category_id}',[App\Http\Controllers\CategoryController::class,'delete_category']);
    Route::get('/create_product',[App\Http\Controllers\AdminController::class,'create_product']);

});