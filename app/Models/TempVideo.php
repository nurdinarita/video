<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempVideo extends Model
{
    use HasFactory;

    protected $table = 'temp_video';
    protected $guarded =[''];
}
