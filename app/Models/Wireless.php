<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wireless extends Model
{
    use HasFactory;
    protected $fillable = ['isWireless'];
    protected $primaryKey = 'id';
    protected $table = 'Wireless';
}
