<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nadcl_profile;
use App\Models\nadcl_steam;
use App\Models\nadcl_team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\nadcl_tournamentplayer;

class NADCL_ProfileController extends Controller
{
    public function PlayerIndex($who)
    {
        $player = nadcl_tournamentplayer::where("displayname", '=', $who)->first();
        if ($player == null)
            return back();
        $profile = nadcl_profile::find($player->key);
        if ($profile == null)
            return back();
        $data = [
            'tPlayer' => $player,
            'pPlayer' => $profile
        ];
        return view('/players/playerindex')->with('data', $data);
    }
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

        if ($request->hasFile('nadcl_headshot')) {
            if ($profile->headshot != null) {
                // dd(public_path('headshots') . $profile->headshot);
                File::delete(public_path('headshots') . '/' . $profile->headshot);
            }
            $name = $request->file('nadcl_headshot')->getClientOriginalName();
            $path = $request->file('nadcl_headshot')->storeAs('public', $name);
            $request->file('nadcl_headshot')->move(public_path('headshots'), $name);
            $profile->headshot = $name;
        }
        if ($request->nadcl_siggy != null)
            $profile->siggy = $request->nadcl_siggy;
        if ($request->nadcl_username != null) {
            if ($profile->altnames == '')
                $profile->altnames = $profile->displayname;
            else
                $profile->altnames = $profile->altnames . ',' . $profile->displayname;
            $profile->displayname = $request->nadcl_username;
        }
        if ($request->nadcl_aboutme != null)
            $profile->about = $request->nadcl_aboutme;
        if ($request->nadcl_hottake != null)
            $profile->hottake = $request->nadcl_hottake;
        if ($request->nadcl_mmr != null)
            $profile->mmr = $request->nadcl_mmr;
        if ($request->nadcl_role != null)
            $profile->role = $request->nadcl_role;
        if ($request->nadcl_cancaptain != null)
            $profile->cancaptain = $request->nadcl_cancaptain;
        if ($request->nadcl_x != null)
            $profile->x = $request->nadcl_x;
        if ($request->nadcl_twitch != null)
            $profile->twitch = $request->nadcl_twitch;
        if ($request->nadcl_youtube != null)
            $profile->youtube = $request->nadcl_youtube;
        if ($request->nadcl_tiktok != null)
            $profile->tiktok = $request->nadcl_tiktok;
        $profile->update();
        return redirect('/dashboard/NADCL_Profile')->with('status', 'Updated Username / About Me');
    }
    public function Dashboard()
    {
        $steamInfo = nadcl_steam::find(auth()->user()->email);
        $nadclInfo = nadcl_profile::find(auth()->user()->email);
        $teamInfo = nadcl_team::find(auth()->user()->email);
        $data = [
            'steam' => $steamInfo,
            'profile' => $nadclInfo,
            'team' => $teamInfo
        ];
        //dd($data);
        return view('/dashboard')->with('data', $data);
    }

    public function TeamLoad()
    {
        $teamInfo = nadcl_team::find(auth()->user()->email);
        $nadclInfo = nadcl_profile::find(auth()->user()->email);
        $data = [
            'team' => $teamInfo,
            'profile' => $nadclInfo,
        ];
        return view('/nadclteams/createteam')->with('data', $data);
    }
    public function TeamStore(Request $request)
    {
        $profile = nadcl_team::find(auth()->user()->email);
        $flag = false;
        if ($profile == null) {
            $profile = new nadcl_team();
            $flag = true;
        }
        if ($request->nadcl_teamname != null)
            $profile->teamname = $request->nadcl_teamname;
        if ($request->hasFile('img/team_logos')) {
            if ($profile->teamlogo != null) {
                // dd(public_path('headshots') . $profile->headshot);
                File::delete(public_path('img/team_logos') . '/' . $profile->teamlogo);
            }
            $name = $request->file('nadcl_teamlogo')->getClientOriginalName();
            $path = $request->file('nadcl_teamlogo')->storeAs('public', $name);
            $request->file('nadcl_teamlogo')->move(public_path('img/team_logos'), $name);
            $profile->teamlogo = $name;
        }
        if ($request->nadcl_aboutteam != null)
            $profile->about = $request->nadcl_aboutteam;

        if ($request->nadcl_players != null) {
            $players = explode(',', $request->nadcl_players);
            foreach ($players as $player) {
                $tournament_player = nadcl_tournamentplayer::find($player);
                if (!$tournament_player) {
                    return back()->with("statusError", "invalid player email. please have the player fully register");
                }
                if ($profile->players == null)
                    $profile->players = $player;
                else
                    $profile->players = $profile->players . ',' . $player;
            }
        }
        if ($request->nadcl_manager != null)
            $profile->manager = $request->nadcl_manager;
        if ($request->nadcl_site != null)
            $profile->externalsite = $request->nadcl_site;
        if ($request->nadcl_youtube != null)
            $profile->youtube = $request->nadcl_youtube;
        if ($request->Winnings != null)
            $profile->totalwinnings = $request->Winnings;
        $profile->key = auth()->user()->email;
        if ($flag)
            $profile->save();
        else
            $profile->update();
        return redirect('/dashboard/NADCL_CreateTeam')->with('status', 'Updated Username / About Me');
    }
}
