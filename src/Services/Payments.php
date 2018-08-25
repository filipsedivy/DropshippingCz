<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Payments implements IService
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


    public function getList(int $eshopId): HttpResponse
    {
        $query = http_build_query([
            'eshop_id' => $eshopId
        ]);

        return $this->httpClient->get('payments?' . $query);
    }
}