<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nadcl_profile;
use App\Models\nadcl_steam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NADCL_ProfileController extends Controller
{
    public function Load()
    {
        $steamInfo = nadcl_steam::find(auth()->user()->email);
        $nadclInfo = nadcl_profile::find(auth()->user()->email);
        $data = [
            'steam' => $steamInfo,
            'profile' => $nadclInfo,
        ];
        return view('/nadcl_profile')->with('data', $data);
    }

    public function Store(Request $request)
    {
        $profile = nadcl_profile::find(auth()->user()->email)->first();
        $name = $request->file('nadcl_headshot')->getClientOriginalName();
        if ($profile->headshot != null) {
           // dd(public_path('headshots') . $profile->headshot);
            File::delete(public_path('headshots') .'/'. $profile->headshot);
        }
        if ($request->hasFile('nadcl_headshot')) {
            $path = $request->file('nadcl_headshot')->storeAs('public', $name);
            $request->file('nadcl_headshot')->move(public_path('headshots'), $name);
            $profile->headshot = $name;
        }
        if ($request->nadcl_siggy != null)
            $profile->siggy = $request->nadcl_siggy;
        if ($request->nadcl_username != null)
            $profile->displayname = $request->nadcl_username;
        if ($request->nadcl_aboutme != null)
            $profile->about = $request->nadcl_aboutme;
        $profile->update();
        return redirect('/user/NADCL_Profile')->with('status', 'Updated Username / About Me');
    }
    public function Dashboard()
    {
        $steamInfo = nadcl_steam::find(auth()->user()->email);
        $nadclInfo = nadcl_profile::find(auth()->user()->email);
        $data = [
            'steam' => $steamInfo,
            'profile' => $nadclInfo,
        ];
        //dd($data);
        return view('/dashboard')->with('data', $data);
    }
}