<?php

namespace FilipSedivy\DropshippingCz\Helpers;

use KHerGe\JSON\JSON;
use Psr\Http\Message\ResponseInterface;

class HttpResponse
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
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
     * @return mixed
     *
     * @throws \Nette\Utils\JsonException
     */
    public function getJson()
    {
        return \Nette\Utils\Json::decode($this->getContent());
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getContent();
    }
}