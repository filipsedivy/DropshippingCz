[![Dropshipping](.github/logo.png)](https://www.dropshipping.cz)


Introduction
------------

This is a library that maps the [Dropshipping.cz API](https://client.api.dropshipping.cz).


Installation
------------

The recommended way to is via [Composer](https://packagist.org/packages/filipsedivy/ntp):

```
composer require filipsedivy/dropshippingcz
```

It requires PHP version 7.1 and supports PHP up to 7.2.


Usage
-----

```php
$apiConfig = new FilipSedivy\DropshippingCz\Model\ApiConfig('token');
$client = new FilipSedivy\DropshippingCz\Client($apiConfig);
```


### Services

```php
$client->getEshops()
$client->getProducts()
$client->getPayments()
$client->getDeliveries()
$client->getOrder()
$client->getOrders()
```

Example
-------

### Get list of eshops

```php
$stringList = $client->getEshops()->getList()->getContent();
$arrayList = $client->getEshops()->getList()->getJson();
```