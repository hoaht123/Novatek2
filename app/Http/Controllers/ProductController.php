<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class ProductController extends Controller
{
    public function create_product(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        return view('admin.product.create_product',compact('supplier','category','brand'));
    }

    
}
