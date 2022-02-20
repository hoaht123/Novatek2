<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class ProductController extends Controller
{
    public function getCategory($parent_id){
        $data = Category::all();
        $recursive = new Recursive($data);
       $htmlOption = $recursive->categoryRecursive($parent_id);
        return $htmlOption;
    }
    //CPU
    public function create_product(){
        $supplier = Supplier::all();
        $category = Category::all();
        $parent_id='';
        $htmlOption = $this->getCategory($parent_id);
        $brand = Brand::all();
        return view('admin.product.create_product',compact('supplier','category','brand','htmlOption'));
    }
    


    public function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_slug'] = Str::slug($data['product_name'],'-');
        $data['category_id'] = $request->category;
        $category = Category::find($data['category_id']);
        $data['category_spec'] = '';
        if($category->parent_id == 0){
            $data['category_spec'] .= $category->category_name;
        }else{
            $data['category_spec'] .= $category->category_name.'-'.Category::find($category->parent_id)->category_name;
        }
        $data['brand_id'] = $request->brand;
        $data['supplier_id'] = $request->supplier;
        $data['product_price'] = $request->product_price;
        $data['product_sku'] = $request->product_sku;
        $data['product_descriptions'] = $request->product_description;
        $data['product_sort_descriptions'] = $request->product_sort_description;
        $data['product_isHot'] = $request->isHot;
        $data['product_isNew'] = $request->isNew;
        $data['product_inStock'] = $request->stock;
        $data['product_status'] = $request->product_status;
        $get_image_gallery = $request->file('product_image_gallery');
        $get_image_main = $request->file('product_image_main');
        // echo '<pre>';
        // print_r($data);
        // die();
        // echo '</pre>';
        
        if($get_image_main == true && $get_image_gallery == true){
            //main
            $get_name_image = $get_image_main->getClientOriginalName();// lấy tên file
            $name_image = current(explode('.',$get_name_image));// cắt tên file thành nhiều phần tử, lấy phần tử đầu
            $extension = explode('.',$get_name_image);
            $get_extension = end($extension);
            $extensionChange = strtolower($get_extension);
            $extensionArray = ['jpg','jpeg','gif','tiff','psb','eps','png'];
            //gallery
            $get_name_image_gallery = $get_image_gallery->getClientOriginalName();// lấy tên file
            $name_image_gallery = current(explode('.',$get_name_image_gallery));// cắt tên file thành nhiều phần tử, lấy phần tử đầu
            $extension_gallery = explode('.',$get_name_image_gallery);
            $get_extension_gallery = end($extension_gallery);
            $extensionChange_gallery = strtolower($get_extension_gallery);
            if(in_array($extensionChange,$extensionArray) && in_array($extensionChange_gallery,$extensionArray)){
                $new_image = $name_image.rand(0,9999) . '.' . $get_image_main->getClientOriginalExtension(); //hàm lấy đuôi file
                $new_image_gallery = $name_image_gallery.rand(0,99) . '.' . $get_image_gallery->getClientOriginalExtension();
                $stored = $get_image_main->move(public_path().'/images/product', $new_image);
                $store_gallery = $get_image_gallery->move(public_path().'/images/product', $new_image_gallery);
                $data['product_main_image'] = $new_image;
                $data['product_image_gallery'] = $new_image_gallery;
                DB::table('Product')->insert($data);
                
                Session::put('message', 'Create product successfully');
                return Redirect::to('admin/view_product');
            }else{
            Session::put('message','File is incorrect . Try again');
            return Redirect::to('admin/view_product');
            }
        }else{
            Session::put('message', 'Create product failed. Try again');
            return Redirect::to('admin/view_product');
        }
    }


    public function view_product(){
        $product = Product::paginate(10);
        $category = Category::all();
        $brand = Brand::all();
        $supplier = Supplier::all();
        return view('admin.product.view_product',compact('product','category','brand','supplier'));
    }

    public function view_product_cate($category_id){
        $product = Product::where('category_id',$category_id)->paginate(10);
        $category = Category::all();
        $brand = Brand::all();
        $supplier = Supplier::all();
        return view('admin.product.category_product',compact('product','category','brand','supplier'));
    }
    public function view_product_brand($brand_id){
        $product = Product::where('brand_id',$brand_id)->paginate(10);
        $category = Category::all();
        $brand = Brand::all();
        $supplier = Supplier::all();
        return view('admin.product.category_product',compact('product','category','brand','supplier'));
    }

    public function view_product_supplier($supplier_id){
        $product = Product::where('supplier_id',$supplier_id)->paginate(10);
        $category = Category::all();
        $brand = Brand::all();
        $supplier = Supplier::all();
        return view('admin.product.category_product',compact('product','category','brand','supplier'));
    }

    public function active_product($product_id){
        DB::table('Product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Show product successfully');
        return Redirect::to('admin/view_product');
    }

    public function unactive_product($product_id){
        DB::table('Product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Hide product successfully');
        return Redirect::to('admin/view_product');
    }

    public function delete_product($product_id){
        Product::find($product_id)->delete();
        Session::put('message','Delete product successfully');
        return Redirect::to('admin/view_product');
    }


    public function product_details($product_id){
        $product = Product::where('product_id',$product_id)->get();
        return view('admin.product.product_details',compact('product'));
    }


    


    
}
