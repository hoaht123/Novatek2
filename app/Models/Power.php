<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    use HasFactory;
    protected $fillable = ['power_value'];
    protected $primaryKey = 'id';
    protected $table = 'Power';
}
