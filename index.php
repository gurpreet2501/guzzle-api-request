<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();

$response = $client->request('POST', 'http://zorango-api.com/v1', [
    'form_params' => [
        'api' => 'create',
        'object' => 'items',
        'data' => [
            'price' => '23',
            'name' => '23',
            'weight' => '23',
            'weight_unit' => '23',
            'brand' => '23',
            'items_per_carton' => '23',
            'description' => '23',
            'stock' => '23',
        ]
    ]
]);


$res = $response->getBody()->getContents();
echo "<pre>";
print_r(json_decode($res));
exit;
