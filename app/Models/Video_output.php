<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_output extends Model
{
    use HasFactory;
    protected $fillable = ['video_output'];
    protected $primaryKey = 'id';
    protected $table = 'Video_output';
}
