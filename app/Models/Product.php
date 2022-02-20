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

    public function cpu_speed(){
        return $this->belongsTo(Cpu_speed::class,'cpu_speed_id');
    }

    public function core(){
        return $this->belongsTo(Core::class,'core_id');
    }

    public function socket(){
        return $this->belongsTo(Socket_type::class,'socket_id');
    }

    public function size_form(){
        return $this->belongsTo(Size_form::class,'size_form_id');
    }

    public function memory_size(){
        return $this->belongsTo(Memory_size::class,'memory_size_id');
    }

    public function memory_type(){
        return $this->belongsTo(Memory_type::class,'memory_type_id');
    }

    public function bus(){
        return $this->belongsTo(Bus_speed::class,'bus_id');
    }

    public function color(){
        return $this->belongsTo(Color::class,'color_id');
    }

    public function fan_qty(){
        return $this->belongsTo(Fan_qty::class,'fan_qty_id');
    }

    public function storage_type(){
        return $this->belongsTo(Storage_type::class,'storage_type_id');
    }

    public function storage_capacity(){
        return $this->belongsTo(Storage_capacity::class,'storage_capacity_id');
    }

    public function storage_speed(){
        return $this->belongsTo(Storage_speed::class,'storage_speed_id');
    }

    public function cpu(){
        return $this->belongsTo(Cpu::class,'cpu_id');
    }

    public function video_output(){
        return $this->belongsTo(Video_output::class,'video_output_id');
    }

    public function power(){
        return $this->belongsTo(Power::class,'power_id');
    }

    public function efficiency(){
        return $this->belongsTo(Efficiency::class,'efficiency_id');
    }

    public function fan_size(){
        return $this->belongsTo(Fan_size::class,'fan_size_id');
    }

    public function key_qty(){
        return $this->belongsTo(Key_qty::class,'key_qty_id');
    }

    public function wireless(){
        return $this->belongsTo(Wireless::class,'wireless_id');
    }

    public function switch(){
        return $this->belongsTo(Switchs::class,'switch_id');
    }

    public function dpi(){
        return $this->belongsTo(Dpi::class,'dpi_id');
    }

    public function headphone_type(){
        return $this->belongsTo(Headphone_type::class,'headphone_type_id');
    }

    public function micro(){
        return $this->belongsTo(Micro::class,'micro_id');
    }

    public function resolution(){
        return $this->belongsTo(Resolution::class,'resolution_id');
    }

    public function monitor_size(){
        return $this->belongsTo(Monitor_size::class,'moniter_size_id');
    }

    public function refresh_rate(){
        return $this->belongsTo(Refresh_rate::class,'refresh_rate_id');
    }

}



