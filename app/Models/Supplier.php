<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['supplier_name','supplier_phone','supplier_address'];
    protected $primaryKey = 'supplier_id';
    protected $table = 'Suppliers';
}
