<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_tournamentplayer extends Model
{
    use HasFactory;
    protected $table = 'nadcl_tournamentplayer';
    protected $fillables = [
        'playeremail', 'tournamentid',
    ];
    protected $primaryKey = 'playeremail';
}
