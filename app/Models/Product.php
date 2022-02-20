<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $timestamp = true;
    protected $fillable = ['product_name','product_price','product_sku','product_slug','product_sort_description','product_description','product_image','product_status','product_isHot','product_isNew','product_inStock'];
    protected $foreignKey = ['category_id','brand_id','supplier_id'];
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



