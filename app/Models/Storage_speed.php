<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage_speed extends Model
{
    use HasFactory;
    protected $fillable = ['storage_speed_value'];
    protected $primaryKey = 'id';
    protected $table = 'Storage_speed';
}
