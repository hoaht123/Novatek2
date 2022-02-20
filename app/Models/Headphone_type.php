<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headphone_type extends Model
{
    use HasFactory;
    protected $fillable = ['headphone_type'];
    protected $primaryKey = 'id';
    protected $table = 'Headphone_type';
}
