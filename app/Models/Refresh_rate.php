<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refresh_rate extends Model
{
    use HasFactory;
    protected $fillable = ['refresh_rate_value'];
    protected $primaryKey = 'id';
    protected $table = 'Refresh_rate';
}
