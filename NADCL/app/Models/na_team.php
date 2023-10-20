<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class na_team extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'na_team';
    protected $fillables = [
        'teamowner', 'teamname', 'teamlogo', 'about', 'pastplayers', 'manager', 'externalsite', 'x',
        'youtube', 'totalwinnings', 'pos1', 'pos2', 'pos3', 'pos4', 'pos5',
    ];
    protected $primaryKey = "teamowner";
}
