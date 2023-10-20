<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class na_accolade extends Model
{
    use HasFactory;
    protected $table = 'na_accolade';
    protected $fillables = [
        'playerid', 'img', 'about', 'name'
    ];
    protected $primaryKey = 'playerid';
    public function user()
    {
        return $this->belongsTo(User::class, 'accoladedisplayid', 'id'); // Adjust the column names as needed
    }
}
