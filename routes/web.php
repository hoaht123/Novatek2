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
    Route::post('saveUpdate_category/{category_id}',[App\Http\Controllers\CategoryController::class,'saveUpdate_category']);
    Route::get('delete_category/{category_id}',[App\Http\Controllers\CategoryController::class,'delete_category']);

    //Brand
    Route::get('/create_brand',[App\Http\Controllers\BrandController::class,'create_brand']);
    Route::post('/save_brand',[App\Http\Controllers\BrandController::class,'save_brand']);
    Route::get('/view_brand',[App\Http\Controllers\BrandController::class,'view_brand']);
    Route::get('/update_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'update_brand']);
    Route::post('saveUpdate_brand/{category_id}',[App\Http\Controllers\BrandController::class,'saveUpdate_brand']);
    Route::get('/view_brand/active_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'active_brand']);
    Route::get('/view_brand/unactive_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'unactive_brand']);
    Route::get('delete_brand/{brand_id}',[App\Http\Controllers\BrandController::class,'delete_brand']);


    //Product
    Route::get('/create_product',[App\Http\Controllers\ProductController::class,'create_product']);

});

Route::prefix('')->group(function(){
    Route::get('/',function(){
        return view ('client.index1');
    })->name('client.index1'); 
    
    Route::get('/about1',function(){
        return view ('client.about1');
    })->name('client.about1'); 
    
    Route::get('/product',function(){
        return view ('client.product');
    })->name('client.product'); 
    
    Route::get('/products1',function(){
        return view ('client.product1');
    })->name('client.products1'); 
    
    Route::get('/products2',function(){
        return view ('client.product2');
    })->name('client.products2'); 
    
    Route::get('/products3',function(){
        return view ('client.products3');
    })->name('client.products3'); 
    
    Route::get('/services1',function(){
        return view ('client.services1');
    })->name('client.services1'); 
    
    
    Route::get('/gallery1',function(){
        return view ('client.gallery1');
    })->name('client.gallery1'); 
    
    Route::get('/gallery2',function(){
        return view ('client.gallery2');
    })->name('client.gallery2'); 
    
    Route::get('/checkout1',function(){
        return view ('client.checkout1');
    })->name('client.checkout1'); 
    
    Route::get('/checkout2',function(){
        return view ('client.checkout2');
    })->name('client.checkout2'); 
    
    Route::get('/cart',function(){
        return view ('client.cart');
    })->name('client.cart'); 
    
    Route::get('/elements',function(){
        return view ('client.elements');
    })->name('client.elements'); 
});