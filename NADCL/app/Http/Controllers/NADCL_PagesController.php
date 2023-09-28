<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nadcl_constants;
use App\Models\nadcl_profile;
use App\Models\nadcl_steam;
use Illuminate\Support\Facades\Auth;

class NADCL_PagesController extends Controller
{
    //
    public function AboutUs()
    {
        $adminEmails  = ["davidmejia4215@gmail.com"];
        $steamInfo = nadcl_steam::find($adminEmails);
        $nadclInfo = nadcl_profile::find($adminEmails);
        $data = [
            'steam' => $steamInfo,
            'profile' => $nadclInfo,
        ];
        return view('/aboutus')->with('data', $data);
    }

    public function BigScreen()
    {
        $nadclInfo = null;
        if (Auth::check())
            $nadclInfo = nadcl_profile::find(auth()->user()->email);
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
            $you[$count] = str_replace('watch?v', 'embed/', $y);
            $count++;
        }
        $tik = explode(',', $raw[0]->tiktok);
        $data = [
            'youtube' => $you,
            'tiktok' => $tik
        ];
        return view('landing')->with('data', $data);
    }
}
