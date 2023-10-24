<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DotaPlayerStats;
use App\Models\na_steam;
use App\Models\nadcl_constants;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NADCL_PagesController extends Controller
{
    public function PlayerCardDisplay($who)
    {
        $profile = user::where("username", '=', $who)->first();
        if ($profile == null)
            return view('/players')->with('statusError', $who . ' is not a valid USERNAME');

        $usersteam = na_steam::find($profile->id);
        $data = [
            'profile' => $profile,
            'steam' => $usersteam,
        ];
        return view('/pages/playercard')->with('data', $data);
    }
    //
    public function AboutUs()
    {
        $data = [];
        return view('/aboutus')->with('data', $data);
    }

    public function BigScreen()
    {
        $nadclInfo = null;
        // if (Auth::check())
        //     $nadclInfo = nadcl_profile::find(auth()->user()->email);
        $data = [
            'profile' => $nadclInfo,
        ];
        return view('/bigscreen')->with('data', $data);
    }

    public function Landing()
    {
        $raw = nadcl_constants::all();
        $you = explode(',', $raw[0]->youtube);
        $count = 0;
        foreach ($you as $y) {
            $you[$count] = str_replace('watch?v=', 'embed/', $y);
            $count++;
        }
        $tik = explode(',', $raw[0]->tiktok);
        $data = [
            'youtube' => $you,
            'tiktok' => $tik
        ];
        return view('/pages/landing')->with('data', $data);
    }

    public function sandbox()
    {
        $raw = nadcl_constants::all();
        $you = explode(',', $raw[0]->youtube);
        $count = 0;
        foreach ($you as $y) {
            $you[$count] = str_replace('watch?v=', 'embed/', $y);
            $count++;
        }
        $tik = explode(',', $raw[0]->tiktok);
        $data = [
            'youtube' => $you,
            'tiktok' => $tik
        ];
        return view('/pages/landing')->with('data', $data);
    }
    public function ShowAllPlayersPlayers()
    {
        $profile = null;
        if (request()->has('search')) {
            $search = Request()->get('search', '');
            if ($search != null) {
                $profile = User::where('username', 'like', '%' . $search . '%')->get();
            }
        }
        if ($profile == null) {
            $profile = User::orderBy("username", 'desc')->get();
        }
        $data = [
            'profile' => $profile, // Rename 'profile' to 'profiles' to hold an array of profiles
        ];

        return view('tournaments/NADCL_showplayers')->with('data', $data);
    }

    public function SeasonFourLoad()
    {
        return view('/tournaments/NADCL_SeasonFour');
    }
}
