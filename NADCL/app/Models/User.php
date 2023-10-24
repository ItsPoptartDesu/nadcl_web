<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password',
        'username', 'about', 'headshot', 'teamid',
        'siggy', 'hottake', 'role', 'mmr', 'cancaptain',
        'x', 'twitch', 'youtube', 'tiktok', 'issteamlinked', 'isteamowner', 'isadmin', 'accoladedisplayid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function steam()
    {
        return $this->hasOne(na_steam::class, 'ownerid', 'id');
    }
    public function accolade()
    {
        return $this->hasOne(na_accolade::class, 'id', 'accoladedisplayid'); // Adjust the column names as needed
    }
    public function accolades()
    {
        return $this->hasMany(na_accolade::class, 'playerid', 'id');
    }
    public function TrackableDotaStats()
    {
        return $this->hasMany(DotaPlayerStats::class, 'ownerid', 'id');
    }
}
