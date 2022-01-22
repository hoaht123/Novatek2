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
    return view('admin.admin_layout');
});
Route::get('product',function(){
    return view('admin.product.create_product');
});
Route::get('dashboard',function(){
    return view('admin.dashboard');
});
Route::get('login',function(){
    return view('admin.login.login');
});