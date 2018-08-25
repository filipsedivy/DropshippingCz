<?php

namespace FilipSedivy\DropshippingCz;

use Exception;
use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Model\ApiConfig;
use FilipSedivy\DropshippingCz\Services\Deliveries;
use FilipSedivy\DropshippingCz\Services\Eshops;
use FilipSedivy\DropshippingCz\Services\Order;
use FilipSedivy\DropshippingCz\Services\Orders;
use FilipSedivy\DropshippingCz\Services\Payments;
use FilipSedivy\DropshippingCz\Services\Products;

class Client
{
    /** @var array */
    private $services = [];

    /** @var HttpClient */
    private $httpClient;

    /**
     * @param ApiConfig $apiConfig
     */
    public function __construct(ApiConfig $apiConfig)
    {
        $this->httpClient = new HttpClient($apiConfig);
    }

    /**
     * @return Eshops|object
     *
     * @throws Exception
     * @throws \ReflectionException
     */
    public function getEshops(): Eshops
    {
        return $this->createObject('Eshops');
    }


    /**
     * @return Products|object
     *
     * @throws \ReflectionException
     */
    public function getProducts(): Products
    {
        return $this->createObject('Products');
    }


    /**
     * @return Payments|object
     *
     * @throws \ReflectionException
     */
    public function getPayments(): Payments
    {
        return $this->createObject('Payments');
    }


    /**
     * @return Deliveries|object
     *
     * @throws \ReflectionException
     */
    public function getDeliveries(): Deliveries
    {
        return $this->createObject('Deliveries');
    }


    /**
     * @return Order|object
     *
     * @throws \ReflectionException
     */
    public function getOrder(): Order
    {
        return $this->createObject('Order');
    }


    /**
     * @return Orders|object
     *
     * @throws \ReflectionException
     */
    public function getOrders(): Orders
    {
        return $this->createObject('Orders');
    }


    /**
     * @param string $class
     * @param string $baseNamespace
     *
     * @return object
     *
     * @throws Exception
     * @throws \ReflectionException
     */
    protected function createObject(string $class, string $baseNamespace = 'FilipSedivy\DropshippingCz\Services')
    {
        $classMap = $class;

        if ($baseNamespace !== null)
        {
            $classMap = sprintf('%s\\%s', rtrim($baseNamespace, '\\'), $class);
        }

        if (array_key_exists($classMap, $this->services))
        {
            $object = $this->services[$classMap];
        }
        else
        {
            $object = null;

            if (!class_exists($classMap))
            {
                throw new \Exception('Class \'' . $classMap . '\' not exists');
            }

            $reflectionClass = new \ReflectionClass($classMap);

            $interfaceNames = array_values($reflectionClass->getInterfaceNames());
            static $interfaceName = 'FilipSedivy\DropshippingCz\Services\IService';

            if (!\in_array($interfaceName, $interfaceNames, true))
            {
                throw new Exception('Service has not IService interface ' . $interfaceName);
            }

            $args = [];

            foreach ($reflectionClass->getConstructor()->getParameters() as $reflectionParameter)
            {
                $reflectionParameterType = $reflectionParameter->getType();
                if ($reflectionParameterType instanceof \ReflectionType)
                {
                    switch ($reflectionParameterType->getName())
                    {
                        case HttpClient::class:
                            $args[] = $this->httpClient;
                            break;

                        default:
                            throw new Exception('Parameter \'' . $reflectionParameterType->getName() . '\' not found');
                            break;
                    }
                }
            }

            $object = $reflectionClass->newInstanceArgs($args);
            $this->services[$classMap] = $object;
        }

        return $object;
    }

}