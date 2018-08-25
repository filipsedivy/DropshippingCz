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
$token = 'token';
$apiConfig = new FilipSedivy\DropshippingCz\Model\ApiConfig($token);
$client = new FilipSedivy\DropshippingCz\Client($apiConfig);
```