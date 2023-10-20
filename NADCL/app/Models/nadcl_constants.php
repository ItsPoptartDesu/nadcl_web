<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_constants extends Model
{
    use HasFactory;
    protected $table = 'nadcl_constants';
    protected $fillables = [
        'youtube', 'tiktok','admins'
    ];
}
