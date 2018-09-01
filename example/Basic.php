<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = new \FilipSedivy\DropshippingCz\Model\ApiConfig('....');
$client = new \FilipSedivy\DropshippingCz\Client($config);

/** @var \FilipSedivy\DropshippingCz\Entity\Services\Order[] $collection */
$collection = $client->getOrders()->getList()->toCollection();