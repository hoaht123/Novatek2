<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function products()
    {
        $brands = Brand::all();
        $categories = Category::where('parent_id',0)->get();
        $products = Product::all();
        return view('client.products', compact('categories','brands','products'));
    }
    public function product_detail()
    {
        return view('client.product_detail');
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function about()
    {
        return view('client.about');
    }
}
