<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    use HasFactory;
    protected $fillable = ['resolution_value'];
    protected $primaryKey = 'id';
    protected $table = 'Resolution';
}
