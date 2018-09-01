<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = new \FilipSedivy\DropshippingCz\Model\ApiConfig('....');
$client = new \FilipSedivy\DropshippingCz\Client($config);

$order = new \FilipSedivy\DropshippingCz\Entity\CreateOrder();
$order->setEmail('test@email.com');
$order->setPhone('777 777 777');
$order->setInvoiceFirstname('Jan')
    ->setInvoiceSurname('Novák')
    ->setInvoiceStreet('Korunní 21')
    ->setInvoiceCity('Praha 2')
    ->setInvoiceZipcode('128 00')
    ->setInvoiceCompany('Jan Novak')
    ->setInvoiceIco('123456')
    ->setInvoiceDic('654321')
    ->setContactLikeInvoice(1);

$order->setEshopId(3);
$order->setPaymentId(2);
$order->setDeliveryId(12);
$order->setBasket(array(
    [
        'id'               => 1,
        'code'             => 'DS12345678',
        'price_retail_vat' => 123.00,
        'quantity'         => 3,
    ]
));

$order->setTest(1);
$order->setPaymentPriceVat(300)
    ->setDeliveryPriceVat(300);

$response = $client->getOrders()->sendOrder($order)->toArray();