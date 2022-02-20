<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memory_type extends Model
{
    use HasFactory;
    protected $fillable = ['memory_name'];
    protected $primaryKey = 'id';
    protected $table = 'Memory_type';
}
