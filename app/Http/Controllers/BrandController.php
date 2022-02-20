<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class BrandController extends Controller
{
    public function create_brand(){
        return view('admin.brand.create_brand');
    }

    public function save_brand(Request $request){
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_name'];
        $brand->brand_slug =Str::slug($data['brand_name'], '-');
        $brand->brand_status = $data['brand_status'];
        $brand->save();
        Session::put('message','Create brand successfully'); 
        return Redirect::to('admin/view_brand');
    }
    
    public function view_brand(){
        $brand = Brand::all();
        return view('admin.brand.view_brand',compact('brand'));
    }

    public function update_brand($brand_id){
       $brand = DB::table('Brands')->where('brand_id',$brand_id)->first();
        return view('admin.brand.update_brand',compact('brand'));

    }

    public function saveUpdate_brand(Request $request , $brand_id){
        $data = $request->all();
        DB::table('Brands')->where('brand_id',$brand_id)->update(['brand_name'=>$data['brand_name']]);
        Session::put('message','Update brand successfully');
        return Redirect::to('admin/view_brand');

    }

    public function active_brand($brand_id){
        DB::table('Brands')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        Session::put('message','Show brand successfully');
        return Redirect::to('admin/view_brand');
    }

    public function unactive_brand($brand_id){
        DB::table('Brands')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        Session::put('message','Hide brand successfully');
        return Redirect::to('admin/view_brand');
    }

    public function delete_brand($brand_id){
        DB::table('Brands')->where('brand_id',$brand_id)->delete();
        Session::put('message','Delete brand successfully');
        return Redirect::to('admin/view_brand');
    }
}
