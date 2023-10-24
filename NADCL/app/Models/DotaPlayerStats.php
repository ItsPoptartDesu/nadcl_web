<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DotaPlayerStats extends Model
{
    use HasFactory;
    protected $table = 'dota_player_stats';
    protected $fillables = [
        'ownerid', 'matchid', 'heroid', 'kills', 'deaths', 'assists',
        'xp_per_min', 'gold_per_min', 'hero_damage', 'tower_damage', 'last_hits'
    ];
    protected $primaryKey = 'ownerid';
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'ownerid'); // Adjust the column names as needed
    }
}
