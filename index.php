<?php
use App\Libs\ApiClient;
require_once 'vendor/autoload.php';
$obj = new ApiClient();

$resp = $obj->set('api','create')
        ->set('object','items')
        ->set('data',[
        'price' => '23',
        'name' => 'Gps',
        'weight' => '1',
        'weight_unit' => 'kg',
        'brand' => 'Crimson',
        'items_per_carton' => '23',
        'description' => 'Yes api working',
        'stock' => '12'
        ])->exec();

echo "<pre>";
print_r($resp);
exit;

exit;

exit;
