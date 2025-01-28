<?php

namespace App\Traits\Services;

use Exception;
use GuzzleHttp\Client;

trait TMDB
{

  public function getMoive($tmdbid, $lang = 'en-US')
  {
    try {
      $client = new Client();
      $endPoint = config('tmdb.base_url') . '/movie/' . $tmdbid;

      $response = $client->request('GET', $endPoint, [
        'query' => [
          'api_key' => config('tmdb.api_key'),
          'language' => $lang, //en-US
          'append_to_response' => 'credits,trailers',
          'include_adult' => false
        ],
      ]);

      return json_decode($response->getBody(), true);
    } catch (Exception $e) {
      return false;
    }
  }

  public function getPopularStars()
  {
    try {
      $client = new Client();
      $endPoint = config('tmdb.base_url') . '/person/popular';

      $response = $client->request('GET', $endPoint, [
        'query' => [
          'api_key' => config('tmdb.api_key'),
          'language' => 'en-US', //en-US
        ],
      ]);

      return json_decode($response->getBody(), true);
    } catch (Exception $e) {
      return false;
    }
  }
}
