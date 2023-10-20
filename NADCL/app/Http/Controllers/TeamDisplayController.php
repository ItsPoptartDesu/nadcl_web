<?php

namespace App\Http\Controllers;

use App\Models\na_team;
use App\Models\nadcl_tournamentplayer;
class TeamDisplayController extends Controller
{
    public function Index($request)
    {
        $team = na_team::where('teamname', '=', $request)->first();
        $players = explode(',', $team->players);
        $tPlayer = [];
        foreach ($players as $player) {
            $p = nadcl_tournamentplayer::find($player);
            array_push($tPlayer, $p);
        }
        $data = [
            'team' => $team,
            'tPlayers' => $tPlayer
        ];
        return view('/nadclteams/nadcl_teamindex')->with('data', $data);
    }
    public function Teams()
    {
        $teams = na_team::All();
        return view('/nadclteams/nadcl_teams')->with('teams', $teams);
    }
    public function Astronaut()
    {
        return view('/nadclteams/astronaut');
    }
    public function Bullish()
    {
        return view('/nadclteams/bullish');
    }
    public function Fryboys()
    {
        return view('/nadclteams/fryboys');
    }
    public function Grin()
    {
        return view('/nadclteams/grin');
    }
    public function Paladins()
    {
        return view('/nadclteams/paladins');
    }
    public function Sporkface()
    {
        return view('/nadclteams/sporkface');
    }
    public function Thv()
    {
        return view('/nadclteams/thv');
    }
    public function Tko()
    {
        return view('/nadclteams/tko');
    }
}
