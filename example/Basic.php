<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = new \FilipSedivy\DropshippingCz\Model\ApiConfig('....');
$client = new \FilipSedivy\DropshippingCz\Client($config);

$orders = $client->getOrders();
$ordersList = $orders->getList();
