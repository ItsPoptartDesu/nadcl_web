<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nadcl_steam;

class NADCL_SteamController extends Controller
{
    public function Load()
    {
        //$steamInfo =  nadcl_steam::where('key', '=', auth()->user()->email);
        $steamInfo = nadcl_steam::find(auth()->user()->email);
        return view('/players/dota_profile')->with('steam', $steamInfo);
    }

    public function ToSteam()
    {
        $login_url_params = [
            'openid.ns'         => 'http://specs.openid.net/auth/2.0',
            'openid.mode'       => 'checkid_setup',
            'openid.return_to'  => 'http://127.0.0.1:8000/user/process-openId',
            'openid.realm'      => (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'],
            'openid.identity'   => 'http://specs.openid.net/auth/2.0/identifier_select',
            'openid.claimed_id' => 'http://specs.openid.net/auth/2.0/identifier_select',
        ];
        $steam_login_url = 'https://steamcommunity.com/openid/login' . '?' . http_build_query($login_url_params, '', '&');

        header("location: $steam_login_url");
        exit();
    }
    public function Store()
    {
        

        $params = [
            'openid.assoc_handle' => $_GET['openid_assoc_handle'],
            'openid.signed'       => $_GET['openid_signed'],
            'openid.sig'          => $_GET['openid_sig'],
            'openid.ns'           => 'http://specs.openid.net/auth/2.0',
            'openid.mode'         => 'check_authentication',
        ];

        $signed = explode(',', $_GET['openid_signed']);

        foreach ($signed as $item) {
            $val = $_GET['openid_' . str_replace('.', '_', $item)];
            $params['openid.' . $item] = stripslashes($val);
        }

        $data = http_build_query($params);
        //data prep
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Accept-language: en\r\n" .
                    "Content-type: application/x-www-form-urlencoded\r\n" .
                    'Content-Length: ' . strlen($data) . "\r\n",
                'content' => $data,
            ],
        ]);

        //get the data
        $result = file_get_contents('https://steamcommunity.com/openid/login', false, $context);

        if (preg_match("#is_valid\s*:\s*true#i", $result)) {
            preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $_GET['openid_claimed_id'], $matches);
            $steamID64 = is_numeric($matches[1]) ? $matches[1] : 0;
            echo 'request has been validated by open id, returning the client id (steam id) of: ' . $steamID64;
        } else {
            echo 'error: unable to validate your request';
            exit();
        }

        $steam_api_key = '1EDC0D204A7716E809F0B2DABE207BE7';

        $response = file_get_contents('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $steam_api_key . '&steamids=' . $steamID64);
        $response = json_decode($response, true);


        $userData = $response['response']['players'][0];
        $isFound = nadcl_steam::find(auth()->user()->email)->first();
        if ($isFound) {
            $isFound->steamid64 = $userData['steamid'];
            $isFound->personaname = $userData['personaname'];
            $isFound->profileurl = $userData['profileurl'];
            $isFound->avatarmedium = $userData['avatarmedium'];
            $isFound->avatar = $userData['avatar'];
            $isFound->avatarfull = $userData['avatarfull'];
            $isFound->realname = $userData['realname'];
            $isFound->loccountrycode = $userData['loccountrycode'];
            $isFound->locstatecode = $userData['locstatecode'];
            $isFound->update();
        } else {
            $steam = new nadcl_steam;
            $steam->key = auth()->user()->email;
            $steam->steamid64 = $userData['steamid'];
            $steam->personaname = $userData['personaname'];
            $steam->profileurl = $userData['profileurl'];
            $steam->avatarmedium = $userData['avatarmedium'];
            $steam->avatar = $userData['avatar'];
            $steam->avatarfull = $userData['avatarfull'];
            $steam->realname = $userData['realname'];
            $steam->loccountrycode = $userData['loccountrycode'];
            $steam->locstatecode = $userData['locstatecode'];
            $steam->save();
        }
        $redirect_url = "NADCL_Profile";
        header("Location: $redirect_url");
        exit();
    }
}
