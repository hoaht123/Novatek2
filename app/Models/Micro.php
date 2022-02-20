<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micro extends Model
{
    use HasFactory;
    protected $fillable = ['isMicro'];
    protected $primaryKey = 'id';
    protected $table = 'Micro';
}
