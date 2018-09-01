<?php

namespace FilipSedivy\DropshippingCz\Helpers;

use FilipSedivy\DropshippingCz\Model\ApiConfig;
use FilipSedivy\DropshippingCz\Application;
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
     * @param string $url
     *
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $url)
    {
        $response = $this->guzzle->request('GET', $url);
        return new HttpResponse($response, 'GET', $url);
    }


    /**
     * @param string                               $url
     * @param string|null|resource|StreamInterface $body
     *
     * @throws GuzzleHttp\Exception\GuzzleException
     */
    public function post(string $url, $body = null)
    {
        $options = array();

        if ($body !== null)
        {
            $options[RequestOptions::BODY] = $body;
        }

        $response = $this->guzzle->request('POST', $url, $options);
        return new HttpResponse($response, 'POST', $url);
    }
}