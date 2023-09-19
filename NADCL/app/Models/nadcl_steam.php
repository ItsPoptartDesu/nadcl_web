<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_steam extends Model
{
    use HasFactory;
    protected $table = 'steam';
    protected $fillables = [
        'key', 'steamid64', 'personaname', 'profileurl', 'avatar',
        'avatarmedium', 'avatarfull', 'realname', 'loccountrycode',
        'locstatecode'
    ];
    protected $primaryKey = 'key';
}
