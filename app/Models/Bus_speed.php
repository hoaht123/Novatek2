<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_speed extends Model
{
    use HasFactory;
    protected $fillable = ['bus_speed'];
    protected $primaryKey = 'id';
    protected $table = 'Bus_speed';
}
