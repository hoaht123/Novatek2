<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor_size extends Model
{
    use HasFactory;
    protected $fillable = ['monitor_size'];
    protected $primaryKey = 'id';
    protected $table = 'Monitor_size';
}
