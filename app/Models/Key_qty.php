<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key_qty extends Model
{
    use HasFactory;
    protected $fillable = ['key_qty'];
    protected $primaryKey = 'id';
    protected $table = 'Key_qty';
}
