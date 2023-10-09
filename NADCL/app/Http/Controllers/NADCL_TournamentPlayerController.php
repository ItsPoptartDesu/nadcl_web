<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nadcl_accolade;
use App\Models\nadcl_profile;
use App\Models\nadcl_steam;
use App\Models\nadcl_tournamentdesc;
use App\Models\nadcl_tournamentplayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NADCL_TournamentPlayerController extends Controller
{
    public function SeasonFiveLoad()
    {
        $found = false;
        if (Auth::check()) {
            $hasEntered = nadcl_tournamentplayer::find(auth()->user()->email);
            $found = $hasEntered == null ? false : true;
        }
        // Is there a limit to entries? Could get a lot back from this
        //maybe like 200 people??!!? probably want some form tab with pages on the other end :/
        $entries = nadcl_tournamentplayer::all();
        $data = [
            'hasJoined' => $found,
            'entries' => $entries,
        ];
        return view('tournaments/NADCL_SeasonFive')->with('data', $data);
    }
    public function NADCL_SeasonJoin()
    {
        if (!Auth::check())
            return back();
        $profile = nadcl_profile::find(auth()->user()->email)->first();
        if (
            $profile->role == null || $profile->siggy == null ||
            $profile->mmr == null || $profile->displayname == null ||
            $profile->cancaptain == null || $profile->steamid64
        ) // haven't set key info for NADCL profile
            return back()->with('statusError', "Please fill out NADCL required Info");

        $entry = new nadcl_tournamentplayer();
        $entry->key = auth()->user()->email;
        $entry->displayname = $profile->displayname;
        $entry->siggy = $profile->siggy;
        $entry->role = $profile->role;
        $entry->mmr = $profile->mmr;
        $entry->cancaptain = $profile->cancaptain;
        // $entry->steamid64 = $steam->steamid64;
        // $entry->personaname = $steam->personaname;
        // $entry->profileurl = $steam->profileurl;
        // $entry->avatarfull = $steam->avatarfull;
        // $entry->realname = $steam->realname;
        // $entry->loccountrycode = $steam->loccountrycode;
        // $entry->locstatecode = $steam->locstatecode;
        $entry->save();
        return redirect('/Tournaments/NADCL_SeasonFive')->with('status', "Successfully Joined NADCL S5");
    }
}
