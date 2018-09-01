[![Dropshipping](.github/logo.png)](https://www.dropshipping.cz)


Introduction
------------

This is a library that maps the [Dropshipping.cz API](https://client.api.dropshipping.cz).


Installation
------------

The recommended way to is via [Composer](https://packagist.org/packages/filipsedivy/dropshippingcz):

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

All services are located in the **src/Services** folder

```php
$client->getEshops()
$client->getProducts()
$client->getPayments()
$client->getDeliveries()
$client->getOrder()
$client->getOrders()
```

### Object HttpResponse

HttpResponse is an object that takes care of returning data from the API. Allows:

- Creating collections and entities over data
- Working with raw data
- Convert to array

#### List of methods object HttpResponse

| Method                    | Data type of return data | Description                                                                 |
|:--------------------------|:-------------------------|:----------------------------------------------------------------------------|
| getResponse()             | ResponseInterface        | This is the returned data object from the Guzzle library                    |
| getContent()              | string                   | Raw body from API                                                           |
| toArray(int $options = 0) | mixed (object OR array)  | Convert JSON output to array                                                |
| toArrayData()             | mixed (object OR array)  | Convert only data to array                                                  |
| toCollection()            | IEntity[]                | Converting data to collections and entities serves to better work with data |


Example
-------

### Get list of eshops

```php
$arrayList = $client->getEshops()->getList()->toArray();
$collection = $client->getEshops()->getList()->toCollection();
```

TODO
----

- **HttpResponse**
    - MultiLevel mapper / create sub entity, collection
- **Services/Orders**
    - Complete sendOrder(...) method
- **Entity/Services/...**
    - Complete PHPDoc
    - Create entity annotation
    - Strict data types
    - Complete *IEntity*->toArray() method :*(*


Donate
======

Has a library helped you or made your job easier?
I will be happy if you contribute PR or even financially. Thanks to these posts, this library can grow and ease work.

| PayPal (link to PayPal.me )                          |
|:-----------------------------------------------------|
| [mail@filipsedivy.cz](https://paypal.me/filipsedivy) |
