<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;
use FilipSedivy\DropshippingCz\Helpers\HttpResponse;

class Orders implements IService
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

    public function getList(
        int $eshopId = null,
        int $id = null,
        int $limit = null,
        int $offset = null,
        string $short = null,
        string $createdFrom = null,
        string $createdTo = null): HttpResponse
    {
        $query = http_build_query([
            'eshop_id'     => $eshopId,
            'id'           => $id,
            'limit'        => $limit,
            'offset'       => $offset,
            'short'        => $short,
            'created_from' => $createdFrom,
            'created_to'   => $createdTo
        ]);

        return $this->httpClient->get('orders?' . $query);
    }
}