<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/weather/{city}', function ($city) {
    $apiKey = env('OPENWEATHERMAP_API_KEY');
    $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}";
    $response = Http::get($url);
    return $response->json();
});

Route::get('/api/places/{city}', function ($city) {
    $clientId = env('FOURSQUARE_CLIENT_ID');
    $clientSecret = env('FOURSQUARE_CLIENT_SECRET');
    $accessToken = env('FOURSQUARE_ACCESS_TOKEN');
    //$url = "https://api.foursquare.com/v3/places/search'?near={$city},JP&limit=5&categoryId=4deefb944765f83613cdba6e&client_id={$clientId}&client_secret={$clientSecret}&v=20230309";
    //$response = Http::get($url);
     
    // Set the API endpoint URL
    $url = 'https://api.foursquare.com/v3/places/search';
    // Set the query parameters
    $query = [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'near' => 'New York City',
        'query' => 'coffee',
        'v' => '20220310', // Current date as the version parameter
        'oauth_token' => $accessToken // Add the access token to the query parameters
    ];
    
    // Send a GET request to the API endpoint with the query parameters
    $response = Http::get($url, $query);
 // Retrieve the response body
    $body = $response->body();
    
    // Decode the response JSON data
    $data = json_decode($body, true);
    return $data;
});
// routes/web.php

Route::get('/weather', function () {
    return view('weather');
});
