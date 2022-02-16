<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class CategoryController extends Controller
{
    public function create_category(){
        return view('admin.category.create_category');
    }

    public function save_category(Request $request){
        $data = $request->all();
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->category_status = $data['category_status'];
        $category->save();
        Session::put('message','Create category successfully');
        return Redirect::to('admin/view_category');
        
    }

    public function view_category(){
        $category = Category::all();
        return view('admin.category.view_category',compact('category'));
    }

    public function active_category($category_id){
        DB::table('Categories')->where('category_id',$category_id)->update(['category_status'=>0]);
        Session::put('message','Show category successfully');
        return Redirect::to('admin/view_category');
    }

    public function unactive_category($category_id){
        DB::table('Categories')->where('category_id',$category_id)->update(['category_status'=>1]);
        Session::put('message','Hide category successfully');
        return Redirect::to('admin/view_category');
    }

    public function update_category($category_id){
        $category = DB::table('Categories')->where('category_id',$category_id)->first();
        return view('admin.category.update_category',compact('category'));
    }

    public function saveUpdate_category(Request $request , $category_id){
        $data = $request->all();
        DB::table('Categories')->where('category_id',$category_id)->update(['category_name'=>$data['category_name']]);
        Session::put('message','Update category successfully');
        return Redirect::to('admin/view_category');
    }

    public function delete_category($category_id){
        DB::table('Categories')->where('category_id',$category_id)->delete();
        Session::put('message','Delete category successfully');
        return Redirect::to('admin/view_category');
    }

}
