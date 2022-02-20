<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Cpu_speed;
use App\Models\Core;
use App\Models\Socket_type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start(); 

class ProductController extends Controller
{
    //CPU
    public function create_product(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $cpu_speed = Cpu_speed::all();
        $core = Core::all();
        $socket_type = Socket_type::all();
        return view('admin.product.create_product',compact('supplier','category','brand','cpu_speed','core','socket_type'));
    }
    //CASE
    public function create_product_case(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $size_form = DB::table('Size_form')->get();
        $fan_qty = DB::table('Fan_qty')->get();
        $color = DB::table('Color')->get();
        return view('admin.product.form.case_form',compact('supplier','category','brand','size_form','fan_qty','color'));
    }
    //RAM
    public function create_product_ram(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $memory_size = DB::table('Memory_size')->get();
        $memory_type = DB::table('Memory_type')->get();
        $bus_speed = DB::table('Bus_speed')->get();
        return view('admin.product.form.ram_form',compact('supplier','category','brand','memory_size','memory_type','bus_speed'));
    }

    //Storage
    public function create_product_storage(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $storage_type = DB::table('Storage_type')->get();
        $storage_capacity = DB::table('Storage_capacity')->get();
        $storage_speed = DB::table('Storage_speed')->get();
        return view('admin.product.form.storage_form',compact('supplier','category','brand','storage_type','storage_capacity','storage_speed'));
    }

    //Motherboard
    public function create_product_motherboard(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $size_form = DB::table('Size_form')->get();
        $socket_type = Socket_type::all();
        $memory_type = DB::table('Memory_type')->get();
        $memory_size = DB::table('Memory_size')->get();
        return view('admin.product.form.motherboard_form',compact('supplier','category','brand','size_form','socket_type','memory_type','memory_size'));
    }

    //Graphic card
    public function create_product_graphic_card(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $cpu = DB::table('Cpu')->get();
        $video_output = DB::table('Video_output')->get();
        $memory_type = DB::table('Memory_type')->get();
        $memory_size = DB::table('Memory_size')->get();
        return view('admin.product.form.graphics_card_form',compact('supplier','category','brand','cpu','video_output','memory_type','memory_size'));
    }

    //Power
    public function create_product_power(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $power = DB::table('Power')->get();
        $efficiency = DB::table('Efficiency')->get();
        $fan_size = DB::table('Fan_size')->get();
        return view('admin.product.form.power_form',compact('supplier','category','brand','power','efficiency','fan_size'));
    }

    //Keyboard
    public function create_product_keyboard(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $key_qty = DB::table('Key_qty')->get();
        $wireless = DB::table('Wireless')->get();
        $switch = DB::table('Switch')->get();
        $color = DB::table('Color')->get();
        return view('admin.product.form.keyboard_form',compact('supplier','category','brand','key_qty','wireless','switch','color'));
    }

    //MOUSE
    public function create_product_mouse(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $dpi = DB::table('Dpi')->get();
        $wireless = DB::table('Wireless')->get();
        $color = DB::table('Color')->get();
        return view('admin.product.form.mouse_form',compact('supplier','category','brand','dpi','wireless','color'));
    }

    //HEADPHONE
    public function create_product_headphone(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $headphone_type = DB::table('Headphone_type')->get();
        $wireless = DB::table('Wireless')->get();
        $micro = DB::table('Micro')->get();
        $color = DB::table('Color')->get();
        return view('admin.product.form.headphone_form',compact('supplier','category','brand','headphone_type','wireless','color','micro'));
    }

    //MONITOR
    public function create_product_monitor(){
        $supplier = Supplier::all();
        $category = Category::all();
        $brand = Brand::all();
        $resolution = DB::table('Resolution')->get();
        $monitor_size = DB::table('Monitor_size')->get();
        $refresh_rate = DB::table('Refresh_rate')->get();
        return view('admin.product.form.monitor_form',compact('supplier','category','brand','resolution','monitor_size','refresh_rate'));
    }

    public function save_product(Request $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
        $data['category_id'] = $request->category;
        $data['brand_id'] = $request->brand;
        $data['supplier_id'] = $request->supplier;
        $data['product_price'] = $request->product_price;
        $data['product_sku'] = $request->product_sku;
        $data['product_descriptions'] = $request->product_description;
        $data['product_sort_descriptions'] = $request->product_sort_description;
        $data['product_isHot'] = $request->isHot;
        $data['product_isNew'] = $request->isNew;
        $data['cpu_speed_id'] = $request->cpu_speed;
        $data['core_id'] = $request->core;
        $data['socket_id'] = $request->socket_type;
        $data['size_form_id'] = $request->size_form;
        $data['fan_qty_id'] = $request->fan;
        $data['color_id'] = $request->color;
        $data['memory_size_id'] = $request->memory_size;
        $data['memory_type_id'] = $request->memory_type;
        $data['bus_id'] = $request->bus_speed;
        $data['storage_type_id'] = $request->storage_type;
        $data['storage_capacity_id'] = $request->storage_capacity;
        $data['storage_speed_id'] = $request->storage_speed;
        $data['cpu_id'] = $request->cpu;
        $data['memory_type_id'] = $request->memory_type;
        $data['fan_size_id'] = $request->fan_size;
        $data['power_id'] = $request->power;
        $data['efficiency_id'] = $request->efficiency;
        $data['key_qty_id'] = $request->key_qty;
        $data['wireless_id'] = $request->wireless;
        $data['switch_id'] = $request->switch;
        $data['dpi_id'] = $request->dpi;
        $data['headphone_type_id'] = $request->headphone_type;
        $data['resolution_id'] = $request->resolution;
        $data['moniter_size_id'] = $request->monitor_size;
        $data['refresh_rate_id'] = $request->refresh_rate;
        $data['micro_id'] = $request->micro;
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
