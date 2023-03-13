<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
public function getWeather($city)
{
    $apiKey = env('OPENWEATHERMAP_API_KEY');
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
    $response = Http::get($url);
    return $response->json();
}

public function getPlaces($city)
{
    $accessToken = env('FOURSQUARE_ACCESS_TOKEN');
    $endpoint = "https://api.foursquare.com/v3/places/search?near=".$city.",JP";

    $apiRequest = array(
        "endpoint"=>$endpoint,
        "auth"=>$accessToken,
        "accept"=>"application/json"
    );

    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => $apiRequest['auth'],
        'Accept' => $apiRequest['accept']
    ])->get($apiRequest['endpoint']);

    $places = json_decode($response);
    return $places->results;
}

}
