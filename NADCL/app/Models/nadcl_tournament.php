<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_tournament extends Model
{
    use HasFactory;
    protected $table = 'nadcl_tournament';
    protected $fillables = [
        'key', 'displayname', 'siggy', 'role', 'mmr',
        'cancaptain', 'steamid64', 'personaname', 'profileurl', 'avatarfull',
        'realname', 'loccountrycode', 'locstatecode'
    ];
    protected $primaryKey = 'key';
}
