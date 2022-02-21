<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','password','roles','address','phone'];
    protected $primaryKey = 'user_id';
    protected $table = 'Users';

    
}
