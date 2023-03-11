<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
public function getWeather($city)
{
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/forecast?q='.$city.',JP&appid=979d4d0c647abd4ac2bce0b8405662ef');

    return $response->getBody();
}

public function getPlaces($city)
{
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://api.foursquare.com/v2/venues/search?near='.$city.',JP&limit=5&categoryId=4deefb944765f83613cdba6e&client_id=LLVVQ103MD2PDU1G4NXP1MHINOKV145FL13TLDIST2HYM1FU&client_secret=G01LQWJMYSL52ZKLKLVC2B1O2BDIEZ3E01A3G5TWJ2T4P1IF&v=20210309');

    return $response->getBody();
}

}
