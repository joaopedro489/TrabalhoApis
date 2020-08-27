<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getHeroes", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/characters";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
Route::get("/getComics", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/comics";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
Route::get("/getCreators", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/creators";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
Route::get("/getEvents", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/events";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
Route::get("/getSeries", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/series";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
Route::get("/getStories", function(){
  //ação necessária para poder passar da autenticação na api da marvel
      $date = new DateTime();
      $timestamp=$date->getTimestamp();
      $keys = env('API_PRIVATE') . env("API_TOKEN");
      $string = $timestamp . $keys;
      $token = md5($string);

      $url = env("API_URL") .  "public/stories";
      $client = new Client();
      $response = $client->request("GET", $url, [
        'headers' => [
              'Content-Type' => 'application/json',
      ],
      'query' => [
        "ts" => $timestamp,
        "apikey" => env("API_TOKEN"),
        "hash" => $token
      ]
    ]);
    $response = $response->getBody();
    return json_decode($response, true);
});
