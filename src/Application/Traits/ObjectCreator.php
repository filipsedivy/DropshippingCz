<?php

namespace FilipSedivy\DropshippingCz\Application\Tratis;

use FilipSedivy\DropshippingCz\Exceptions\Application;
use FilipSedivy\DropshippingCz\Helpers;
use FilipSedivy\DropshippingCz\Services\IService;

trait ObjectCreator
{

    /**
     * @param string $serviceName
     * @param string $baseNamespace
     *
     * @return null|object|IService
     *
     * @throws Application\UndefinedClassException
     * @throws \ReflectionException
     */
    protected function tryCreateService(string $serviceName, string $baseNamespace = 'FilipSedivy\DropshippingCz\Services')
    {
        $classMap = $serviceName;

        if ($baseNamespace !== null)
        {
            $classMap = sprintf('%s\\%s', rtrim($baseNamespace, '\\'), $serviceName);
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
                throw new Application\UndefinedClassException($classMap);
            }

            $reflectionClass = new \ReflectionClass($classMap);

            $interfaceNames = array_values($reflectionClass->getInterfaceNames());
            static $interfaceName = 'FilipSedivy\DropshippingCz\Services\IService';

            if (!\in_array($interfaceName, $interfaceNames, true))
            {
                throw new \Exception('Service has not IService interface ' . $interfaceName);
            }

            $args = [];

            foreach ($reflectionClass->getConstructor()->getParameters() as $reflectionParameter)
            {
                $reflectionParameterType = $reflectionParameter->getType();
                if ($reflectionParameterType instanceof \ReflectionType)
                {
                    switch ($reflectionParameterType->getName())
                    {
                        case Helpers\HttpClient::class:
                            $args[] = $this->httpClient;
                            break;

                        default:
                            throw new \Exception('Parameter \'' . $reflectionParameterType->getName() . '\' not found');
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