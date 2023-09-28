<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_profile extends Model
{
    use HasFactory;
    protected $table = 'nadcl_profile';
    protected $fillables = [
        'key', 'displayname', 'about', 'headshot',
        'siggy', 'hottake', 'role', 'mmr', 'cancaptain',
        'x', 'twitch', 'youtube', 'tiktok'
    ];
    protected $primaryKey = 'key';
}
