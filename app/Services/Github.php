<?php

namespace App\Services;

use GuzzleHttp\Client as Guzzle;

class Github
{

   protected $client;

   public function __construct()
   {
      $this->client = new Guzzle([
         'base_uri' => 'https://api.github.com/users/clintwinter/repos',
      ]);
   }

   public function get($url, array $params = [])
   {

      $paramString = '';

      if (count($params) > 0) {

         $list = [];
         foreach ($params as $key => $value) {
            $list[] = $key . '=' . $value;
         }

         $paramString = '?' . implode('&', $list);
      }

      $response = $this->client->get($url . $paramString);

      if ($response->getStatusCode() == 200) {
         return $response->getBody()->getContents();
      }
   }
}
