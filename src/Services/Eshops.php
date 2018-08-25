<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Eshops implements IService
{
    /** @var HttpClient $httpClient */
    private $httpClient;


    /**
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    /**
     * @return HttpResponse
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(): HttpResponse
    {
        return $this->httpClient->get('eshops');
    }
}