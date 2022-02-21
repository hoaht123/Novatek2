<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Components\Recursive;
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class CategoryController extends Controller
{
    public function getCategory($parent_id){
        $data = Category::all();
        $recursive = new Recursive($data);
       $htmlOption = $recursive->categoryRecursive($parent_id);
        return $htmlOption;
    }

    public function create_category(){
        $parent_id='';
        $htmlOption = $this->getCategory($parent_id);
        return view('admin.category.create_category', compact('htmlOption'));
    }

    public function save_category(Request $request){
        $data = $request->all();
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->parent_id = $data['parent_id'];
        $category->category_slug =Str::slug($data['category_name'], '-');
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

    public function edit($id)
    {
        $category = Category::find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.categories.edit', compact('category', 'htmlOption'));
    }

    public function update_category($category_id){
        $category = Category::find($category_id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.category.update_category',compact('category','htmlOption'));
    }

    public function saveUpdate_category(Request $request , $category_id){
        $data = $request->all();
        DB::table('Categories')->where('category_id',$category_id)->update(['category_name'=>$data['category_name'],'parent_id' =>$data['parent_id']]);
        Session::put('message','Update category successfully');
        return Redirect::to('admin/view_category');
    }

    public function delete_category($category_id){
        DB::table('Categories')->where('category_id',$category_id)->delete();
        Session::put('message','Delete category successfully');
        return Redirect::to('admin/view_category');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        $category = Category::where('category_name','like','%'.$keyword.'%')->get();
        return view('admin.category.view_category',compact('category'));
    }
    public function category_clicked($category_id){
        $category = Category::find($category_id);
        $category_children = Category::where('parent_id',$category_id)->get();
        if($category_id != 0){
            $category_parent = Category::where('category_id',$category->parent_id)->first();
            if($category_parent->parent_id != 0){
                $category_parent_parent = Category::where('category_id',$category_parent->parent_id)->first();
                return view('client.category_show',compact('category','category_children','category_parent','category_parent_parent'));
            }
            return view('client.category_show',compact('category','category_children','category_parent'));
        }
        return view('client.category_show',compact('category','category_children'));
    }

}
