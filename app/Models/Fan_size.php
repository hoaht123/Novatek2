<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fan_size extends Model
{
    use HasFactory;
    protected $fillable = ['fan_size'];
    protected $primaryKey = 'id';
    protected $table = 'Fan_size';
}
