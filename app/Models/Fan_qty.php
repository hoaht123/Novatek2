<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fan_qty extends Model
{
    use HasFactory;
    protected $fillable = ['fan_qty'];
    protected $primaryKey = 'id';
    protected $table = 'Fan_qty';
}
