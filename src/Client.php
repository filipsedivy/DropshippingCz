<?php

namespace FilipSedivy\DropshippingCz;

use FilipSedivy\DropshippingCz\Application\Traits;
use FilipSedivy\DropshippingCz\Exceptions\Application;
use FilipSedivy\DropshippingCz\Helpers;
use FilipSedivy\DropshippingCz\Model;
use FilipSedivy\DropshippingCz\Services;


/**
 * @method Services\Eshops getEshops()
 * @method Services\Products getProducts()
 * @method Services\Payments getPayments()
 * @method Services\Deliveries getDeliveries()
 * @method Services\Order getOrder()
 * @method Services\Orders getOrders()
 */
class Client
{
    use Traits\ObjectCreator;

    /** @var array */
    private $services = [];

    /** @var Helpers\HttpClient */
    private $httpClient;


    /**
     * @param Model\ApiConfig $apiConfig
     */
    public function __construct(Model\ApiConfig $apiConfig)
    {
        $this->httpClient = new Helpers\HttpClient($apiConfig);
    }


    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return null|object
     *
     * @throws Application\UndefinedClassException
     * @throws Application\UndefinedMethodException
     * @throws \ReflectionException
     */
    public function __call(string $name, array $arguments)
    {
        // Detect service
        if (preg_match('/^(get)(?<method>[a-zA-Z]+)$/', $name, $matches))
        {
            return $this->tryCreateService($matches['method']);
        }

        throw new Application\UndefinedMethodException($name);
    }
}