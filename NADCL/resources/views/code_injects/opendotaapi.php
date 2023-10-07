<?php 
function GetPlayer($_steamID)
{
    
    $addy = "https://api.opendota.com/api/players/" . $_steamID . "?" . env('OPENDOTA_API');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $addy);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $data = curl_exec($ch);
    curl_close($ch);
    $json_array = json_decode($data, true);
    return $json_array;
}