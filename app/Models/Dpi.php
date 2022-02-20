<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpi extends Model
{
    use HasFactory;
    protected $fillable = ['dpi_value'];
    protected $primaryKey = 'id';
    protected $table = 'Dpi';
}
