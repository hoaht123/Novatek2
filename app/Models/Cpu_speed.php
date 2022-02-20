<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu_speed extends Model
{
    use HasFactory;
    protected $fillable = ['cpu_speed_name'];
    protected $primaryKey = 'id';
    protected $table = 'Cpu_speed';
}
