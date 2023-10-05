<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_accolade extends Model
{
    use HasFactory;
    protected $table = 'nadcl_accolade';
    protected $fillables = [
        'key', 'img', 'about',
    ];
    protected $primaryKey = 'key';
}
