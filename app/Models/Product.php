<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $timestamp = true;
    protected $fillable = ['product_name','product_price','product_sku','product_description','product_image','product_status','product_isHot','product_isNew','product_inStock'];
    protected $foreignKey = ['category_id','brand_id','supplier_id','cpu_speed_id','core_id','socket_id','size_form_id','memory_size_id','memory_type_id','bus_id','color_id',
    'fan_qty_id','storage_type_id','storage_capacity_id','cpu_id','memory_card_id','video_output_id','power_id','efficiency_id','fan_size_id','key_qty_id','wireless_id','switch_id','dpi_id'
    ,'headphone_type_id','micro_id','resolution_id','moniter_size_id','refresh_rate_id'];
    protected $primaryKey = 'product_id';
    protected $table = 'Product';

    public function brands(){
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function suppliers(){
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
}



