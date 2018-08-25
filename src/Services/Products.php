<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Products implements IService
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
     * @param int      $eshopId
     * @param int|null $id
     * @param int      $limit
     * @param int      $offset
     *
     * @return \FilipSedivy\DropshippingCz\Helpers\HttpResponse
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(int $eshopId, int $id = null, int $limit = 30, int $offset = 0): HttpResponse
    {
        $query = http_build_query([
            'eshop_id' => $eshopId,
            'id'       => $id,
            'limit'    => $limit,
            'offset'   => $offset
        ]);

        return $this->httpClient->get('products?' . $query);
    }


    public function getCategories(int $eshopId, int $limit = 30, int $offset = 0): HttpResponse
    {
        $query = http_build_query([
            'eshop_id' => $eshopId,
            'limit'    => $limit,
            'offset'   => $offset
        ]);

        return $this->httpClient->get('products/categories?' . $query);
    }
}