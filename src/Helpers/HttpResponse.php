<?php

namespace FilipSedivy\DropshippingCz\Helpers;

use FilipSedivy\DropshippingCz\Exceptions\Application\FatalErrorException;
use FilipSedivy\DropshippingCz\Exceptions\Application\UndefinedClassException;
use FilipSedivy\DropshippingCz\Exceptions\Application\UndefinedClassParameterException;
use FilipSedivy\DropshippingCz\Exceptions\HttpClient\HttpClientErrorException;
use Psr\Http\Message\ResponseInterface;
use Nette\Utils\Json;

class HttpResponse
{
    private $response;

    private $method;

    private $url;

    public function __construct(ResponseInterface $response, string $method = '', string $url = '')
    {
        $this->response = $response;
        $this->method = $method;
        $this->url = $url;

        if ($response->getStatusCode() === 400)
        {
            throw new HttpClientErrorException($response->getBody()->getContents());
        }
    }


    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }


    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->getResponse()->getBody()->getContents();
    }


    /**
     * @param int $options
     *
     * @return mixed
     *
     * @throws \Nette\Utils\JsonException
     */
    public function toArray($options = 0)
    {
        return Json::decode($this->getContent(), $options);
    }


    /**
     * @return mixed
     *
     * @throws \Nette\Utils\JsonException
     * @throws FatalErrorException
     */
    public function toArrayData()
    {
        if (strtolower($this->method) === 'post')
        {
            throw new FatalErrorException('You can not get array data with POST requests. Use toArray() method');
        }

        return $this->toArray(0)->data;
    }


    /**
     * @return array
     *
     * @throws UndefinedClassParameterException
     * @throws UndefinedClassException
     * @throws FatalErrorException
     * @throws \ReflectionException
     * @throws \Nette\Utils\JsonException
     */
    public function toCollection(): array
    {
        if ($this->method === '')
        {
            throw new UndefinedClassParameterException('Parameter method is not set');
        }

        if ($this->url === '')
        {
            throw new UndefinedClassParameterException('Parameter url is not set');
        }

        if (strtolower($this->method) === 'post')
        {
            throw new FatalErrorException('You can not create collections with POST requests. Use toArray() method');
        }

        preg_match('/^(?<method>[a-zA-Z\/\-]+)/', $this->url, $matches);

        $entityClass = $this->createEntityClassName($matches['method']);

        if (!class_exists($entityClass))
        {
            throw new UndefinedClassException($entityClass);
        }

        $collection = [];

        foreach ($this->toArrayData() as $row)
        {
            $entityObject = new $entityClass;
            $reflectionClass = new \ReflectionClass($entityObject);

            foreach ($row as $property => $value)
            {
                if (!property_exists($entityClass, $property))
                {
                    $exceptionMessage = 'Property \'' . $property . '\' in class \'' . $entityClass . '\' not exists';
                    throw new UndefinedClassParameterException($exceptionMessage);
                }

                $reflectionProperty = $reflectionClass->getProperty($property);
                $reflectionProperty->setAccessible(true);
                $reflectionProperty->setValue($entityObject, $value);
            }

            $collection[] = $entityObject;
        }

        return $collection;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getContent();
    }


    private function createEntityClassName($method)
    {
        $singular = function ($input) {
            if (false !== strpos($input, 'ies'))
            {
                $input = substr($input, 0, -3);
                $input .= 'y';
            }
            elseif (false !== strpos($input, 'ses'))
            {
                $input = substr($input, 0, -3);
                $input .= 's';
            }
            else
            {
                $input = rtrim($input, 's');
            }

            return $input;
        };

        // Detect multiname method
        if (false !== strpos($method, '/'))
        {
            $explodeSeparator = explode('/', $method);
            $method = '';
            foreach ($explodeSeparator as $item)
            {
                $item = strtolower($item);
                $item = $singular($item);
                $method .= ucfirst($item);
            }
        }
        elseif (false !== strpos($method, '-'))
        {
            $explodeSeparator = explode('-', $method);
            $method = '';
            foreach ($explodeSeparator as $item)
            {
                $item = strtolower($item);
                $item = $singular($item);
                $method .= ucfirst($item);
            }
        }
        else
        {
            $method = $singular($method);
            $method = ucfirst($method);
        }


        return 'FilipSedivy\\DropshippingCz\\Entity\\Services\\' . $method;
    }
}