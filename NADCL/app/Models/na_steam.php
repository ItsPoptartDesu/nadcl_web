<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class na_steam extends Model
{
    use HasFactory;
    protected $table = 'na_steam';
    protected $fillables = [
        'ownerid', 'steamid64', 'personaname', 'profileurl', 'avatar',
        'avatarmedium', 'avatarfull', 'realname', 'loccountrycode',
        'locstatecode',
    ];
    protected $primaryKey = 'ownerid';
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'ownerid'); // Adjust the column names as needed
    }
}
