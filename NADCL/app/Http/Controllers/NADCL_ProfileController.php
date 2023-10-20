<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\na_accolade;
use App\Models\na_steam;
use App\Models\na_team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\nadcl_tournamentplayer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NADCL_ProfileController extends Controller
{
    public function Load()
    {
        return view('/nadcl_profile');
    }

    public function Store(Request $request)
    {
        $profile = User::find(auth()->user()->id)->first();

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
        if ($request->nadcl_accname != null)
            $profile->accoladedisplayid = $request->nadcl_accname;
        if ($request->nadcl_siggy != null)
            $profile->siggy = $request->nadcl_siggy;
        if ($request->nadcl_username != null)
            $profile->username = $request->nadcl_username;
        if ($request->nadcl_aboutme != null)
            $profile->about = $request->nadcl_aboutme;
        if ($request->nadcl_hottake != null)
            $profile->hottake = $request->nadcl_hottake;
        if ($request->nadcl_mmr != null)
            $profile->mmr = $request->nadcl_mmr;
        if ($request->nadcl_discord != null)
            $profile->discord = $request->nadcl_discord;
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
        $teamInfo = na_team::find(auth()->user()->id);
        $data = [
            'team' => $teamInfo
        ];
        //dd($data);
        return view('/dashboard')->with('data', $data);
    }

    public function TeamLoad()
    {
        $teamInfo = na_team::find(auth()->user()->id);
        $nadclInfo = User::find(auth()->user()->id);
        $data = [
            'team' => $teamInfo,
            'profile' => $nadclInfo,
        ];
        return view('/nadclteams/createteam')->with('data', $data);
    }
    public function TeamStore(Request $request)
    {
        $profile = na_team::find(auth()->user()->id);
        $flag = false;
        if ($profile == null) {
            $profile = new na_team();
            $flag = true;
        }
        if ($request->nadcl_teamname != null)
            $profile->teamname = $request->nadcl_teamname;
        if ($request->hasFile('nadcl_teamlogo')) {
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
        $profile->email = auth()->user()->email;
        if ($flag)
            $profile->save();
        else
            $profile->update();
        return redirect('/dashboard/NADCL_CreateTeam')->with('status', 'Updated Username / About Me');
    }

    public function AdminLoad()
    {
        $teamInfo = na_team::find(auth()->user()->id);
        $users = User::where('issteamlinked', 1)->get();
        $accolades = na_accolade::all();
        $data = [
            'team' => $teamInfo,
            'accolades' => $accolades,
            'users' => $users,
        ];
        //dd($data);
        return view("adminpanel")->with('data', $data);
    }

    public function AdminStore(Request $request)
    {
        if ($request->nadcl_acctag != null) {
            if (isset($request->nadcl_playername) && $request->nadcl_accoladename == "delete_me") {
                $tested = na_accolade::where('id', $request->nadcl_acctag)->first();
                na_accolade::where('name', $tested->name)->where('playerid', $request->nadcl_playername)
                    ->delete();
                return redirect('/dashboard/AdminPanel')->with('status', 'Removed ' . $request->nadcl_acctag . " from " . $request->nadcl_playername);
            } else {
                $accToCopy = na_accolade::where('id', $request->nadcl_acctag)->first();
                $acc = new na_accolade();
                $acc->img = $accToCopy->img;
                $acc->name = $accToCopy->name;
                $acc->about = $accToCopy->about;
                $acc->playerid = $request->nadcl_playername;
                $acc->save();
                return redirect('/dashboard/AdminPanel')->with('status', 'Added new Accolade');
            }
        }

        if (
            $request->nadcl_accoladename != null &&
            $request->hasFile('nadcl_img') &&
            $request->nadcl_about != null &&
            $request->nadcl_playername != null
        ) {

            $accolade = new na_accolade();
            $name = $request->file('nadcl_img')->getClientOriginalName();
            $path = $request->file('nadcl_img')->storeAs('public', $name);
            $request->file('nadcl_img')->move(public_path('img/accolades'), $name);
            $accolade->img = $name;
            $accolade->name = $request->nadcl_accoladename;
            $accolade->about = $request->nadcl_about;
            $accolade->playerid = $request->nadcl_playername;
            $accolade->save();
            return redirect('/dashboard/AdminPanel')->with('status', 'Added new Accolade');
        }
    }
}
