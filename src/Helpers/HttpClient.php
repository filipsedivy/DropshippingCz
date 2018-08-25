<?php

namespace FilipSedivy\DropshippingCz\Helpers;

use FilipSedivy\DropshippingCz\Model\ApiConfig;
use GuzzleHttp;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\StreamInterface;

class HttpClient
{
    const ENDPOINT = 'https://client.api.dropshipping.cz/v1/';

    private $guzzle;


    public function __construct(ApiConfig $apiConfig)
    {
        $this->guzzle = new GuzzleHttp\Client([
            'base_uri'              => self::ENDPOINT,
            RequestOptions::HEADERS => [
                'Authorization' => $apiConfig->getToken()
            ]
        ]);
    }

    /**
     * @param string $method
     *
     * @return HttpResponse
     *
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $method): HttpResponse
    {
        $response = $this->guzzle->request('GET', $method);
        return new HttpResponse($response);
    }


    /**
     * @param string                               $method
     * @param string|null|resource|StreamInterface $body
     *
     * @return HttpResponse
     *
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function post(string $method, $body = null): HttpResponse
    {
        $options = array();

        if ($body !== null)
        {
            $options[RequestOptions::BODY] = $body;
        }

        $response = $this->guzzle->request('POST', $method, $options);
        return new HttpResponse($response);
    }
}