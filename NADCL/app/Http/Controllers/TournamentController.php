<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    //
    public function NADCL_SeasonSelection($id)
    {
        return view('/tournaments/NADCL_Season', ['id' => $id]);
    }
}
