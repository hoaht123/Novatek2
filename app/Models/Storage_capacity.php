<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage_capacity extends Model
{
    use HasFactory;
    protected $fillable = ['storage_capacity'];
    protected $primaryKey = 'id';
    protected $table = 'Storage_capacity';
}
