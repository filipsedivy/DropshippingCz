<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Deliveries implements IService
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

        return $this->httpClient->get('deliveries?' . $query);
    }


    public function getPlaces(int $deliveryId, int $limit = 30, int $offset = 0): HttpResponse
    {
        $query = http_build_query([
            'delivery_id' => $deliveryId,
            'limit'       => $limit,
            'offset'      => $offset
        ]);

        return $this->httpClient->get('delivery-places?' . $query);
    }
}