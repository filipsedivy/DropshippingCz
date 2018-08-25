<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Order implements IService
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


    public function getStatuses(): HttpResponse
    {
        return $this->httpClient->get('order-statuses');
    }

}