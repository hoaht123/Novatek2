<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size_form extends Model
{
    use HasFactory;
    protected $fillable = ['size_form_name'];
    protected $primaryKey = 'id';
    protected $table = 'Size_form';
}
