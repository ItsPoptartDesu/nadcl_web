<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nadcl_profile;
use App\Models\nadcl_tournamentdesc;
use App\Models\nadcl_tournamentplayer;
use Illuminate\Http\Request;

class NADCL_TournamentDescController extends Controller
{
    //
    public function Index($request)
    {
        $found = nadcl_tournamentdesc::find($request);
        if ($found == null)
            return redirect('/');
        $data = [
        ];
        return view('/tournaments/NADCL_Season')->with('data', $data);
    }
}
