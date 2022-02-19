<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function create_product(){
        return view('admin.product.create_product');
    }
    public function login(){
        return view('admin.login.login');
    }

}
