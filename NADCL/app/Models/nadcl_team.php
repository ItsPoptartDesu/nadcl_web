<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_team extends Model
{
    use HasFactory;
    protected $table = 'nadcl_team';
    protected $fillables = [
        'key', 'about', 'players', 'pastplayers', 'teamlogo',
        'manager', 'externalsite', 'x', 'youtube', 'totalwinnings',
    ];
    protected $primaryKey = 'key';
}
