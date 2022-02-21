<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;


Route::prefix('admin')->group(function(){
    Route::get('/',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/login',[App\Http\Controllers\AdminController::class,'login']);
    //Category
    Route::get('/create_category',[App\Http\Controllers\CategoryController::class,'create_category'])->name('create_category');
    Route::post('/save_category',[App\Http\Controllers\CategoryController::class,'save_category']);
    Route::get('/view_category',[App\Http\Controllers\CategoryController::class,'view_category']);
    Route::get('/view_category/active_category/{category_id}',[App\Http\Controllers\CategoryController::class,'active_category']);
    Route::get('/view_category/unactive_category/{category_id}',[App\Http\Controllers\CategoryController::class,'unactive_category']);
    Route::get('/update_category/{category_id}',[App\Http\Controllers\CategoryController::class,'update_category']);
    Route::post('saveUpdate_category/{category_id}',[App\Http\Controllers\CategoryController::class,'saveUpdate_category']);
    Route::get('delete_category/{category_id}',[App\Http\Controllers\CategoryController::class,'delete_category']);

    //Brand
    Route::get('/create_brand',[App\Http\Controllers\BrandController::class,'create_brand'])->name('create_brand');
    Route::post('/save_brand',[App\Http\Controllers\BrandController::class,'save_brand']);
    Route::get('/view_brand',[App\Http\Controllers\BrandController::class,'view_brand']);
    Route::get('/update_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'update_brand']);
    Route::post('saveUpdate_brand/{category_id}',[App\Http\Controllers\BrandController::class,'saveUpdate_brand']);
    Route::get('/view_brand/active_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'active_brand']);
    Route::get('/view_brand/unactive_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'unactive_brand']);
    Route::get('delete_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'delete_brand']);


    //Product
    Route::prefix('/create_product')->group(function(){
        Route::get('/',[App\Http\Controllers\ProductController::class,'create_product']);
       
    });

    //User
    Route::get('/view_user',[App\Http\Controllers\AdminController::class,'view_user']); 

    Route::post('/save_product',[App\Http\Controllers\ProductController::class,'save_product']);
    Route::get('/view_product',[App\Http\Controllers\ProductController::class,'view_product']);
    Route::get('/product_details/{product_id}',[App\Http\Controllers\ProductController::class,'product_details']);
    Route::get('/view_product_cate/{category_id}',[App\Http\Controllers\ProductController::class,'view_product_cate']);
    Route::get('/view_product_brand/{brand_id}',[App\Http\Controllers\ProductController::class,'view_product_brand']);
    Route::get('/update_product/{product_id}',[App\Http\Controllers\ProductController::class,'update_product']);
    Route::get('/view_product_sup/{supplier_id}',[App\Http\Controllers\ProductController::class,'view_product_supplier']);
    Route::get('/view_product/active_product/{product_id}',[App\Http\Controllers\ProductController::class,'active_product']);
    Route::get('/view_product/unactive_product/{product_id}',[App\Http\Controllers\ProductController::class,'unactive_product']);
    Route::get('delete_product/{product_id}',[App\Http\Controllers\ProductController::class,'delete_product']);
});

Route::prefix('')->group(function(){
    //Login facebook
    Route::get('/login-facebook',[App\Http\Controllers\LoginController::class,'login_facebook']);
    Route::get('/login-facebook/callback',[App\Http\Controllers\LoginController::class,'login_facebook_callback']);

    //Google
    Route::get('/login-google',[App\Http\Controllers\LoginController::class,'login_google']);
    Route::get('/login-google/callback',[App\Http\Controllers\LoginController::class,'login_google_callback']);
    //logout
    Route::get('log-out',[App\Http\Controllers\LoginController::class,'logout']);

    Route::get('',[HomeController::class,'index'])->name('client.home'); 
    Route::get('/products',[HomeController::class,'products'])->name('client.products'); 
    Route::get('/product/{product_id}',[HomeController::class,'product_detail'])->name('client.product_detail');
    Route::get('/cart',[HomeController::class,'cart'])->name('client.cart');
    Route::get('/checkout',[HomeController::class,'checkout'])->name('client.checkout');
    Route::get('/contact',[HomeController::class,'contact'])->name('client.contact');
    Route::get('/about',[HomeController::class,'about'])->name('client.about');
});
