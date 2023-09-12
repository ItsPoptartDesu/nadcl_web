<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamDisplayController extends Controller
{
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
        return view('/nadcleteams/fryboys');
    }

    public function Grin()
    {
        return view('/nadcleteams/fryboys');
    }

    public function Paladins()
    {
        return view('/nadcleteams/paladins');
    }    
    public function Sporkface()
    {
        return view('/nadcleteams/sporkface');
    }
    public function Thv()
    {
        return view('/nadcleteams/thv');
    }
    public function Tko()
    {
        return view('/nadcleteams/tko');
    }
}