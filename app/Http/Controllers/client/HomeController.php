<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function products()
    {
        $categories = Category::where('parent_id',0)->get();
        return view('client.products', compact('categories'));
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
