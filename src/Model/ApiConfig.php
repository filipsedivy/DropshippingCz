<?php

namespace FilipSedivy\DropshippingCz\Model;

class ApiConfig
{
    /** @var string */
    private $token;


    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }


    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}