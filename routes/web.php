<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function(){
    Route::get('/',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/login',[App\Http\Controllers\AdminController::class,'login']);
    Route::get('/create_product',[App\Http\Controllers\AdminController::class,'create_product']);

});
