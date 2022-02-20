<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Efficiency extends Model
{
    use HasFactory;
    protected $fillable = ['efficiency_value'];
    protected $primaryKey = 'id';
    protected $table = 'Efficiency';
}
