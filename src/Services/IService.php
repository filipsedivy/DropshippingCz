<?php

namespace FilipSedivy\DropshippingCz\Services;

use FilipSedivy\DropshippingCz\Helpers\HttpClient;

interface IService
{
    public function __construct(HttpClient $httpClient);
}