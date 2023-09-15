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