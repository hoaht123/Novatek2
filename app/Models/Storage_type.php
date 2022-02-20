<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage_type extends Model
{
    use HasFactory;
    protected $fillable = ['storage_type'];
    protected $primaryKey = 'id';
    protected $table = 'Storage_type';
}
