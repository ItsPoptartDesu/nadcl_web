<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nadcl_tournamentdesc extends Model
{
    use HasFactory;
    protected $table = 'nadcl_tournament_desc';
    protected $fillables = [
        'seriesname', 'organizer', 'server',
        'type', 'location', 'format',
        'prizepool', 'startdate', 'enddate',
        'version', 'numteams', 'islive'
    ];
}
