<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socket_type extends Model
{
    use HasFactory;
    protected $fillable = ['socket_name'];
    protected $primaryKey = 'id';
    protected $table = 'Socket_type';
}
