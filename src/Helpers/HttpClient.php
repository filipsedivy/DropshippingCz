<?php

namespace FilipSedivy\DropshippingCz\Helpers;

use FilipSedivy\DropshippingCz\Exceptions\HttpClient\HttpClientErrorException;
use FilipSedivy\DropshippingCz\Model\ApiConfig;
use FilipSedivy\DropshippingCz\Application;
use GuzzleHttp;
use GuzzleHttp\RequestOptions;
use Nette\Utils\Json;
use Nette\Utils\JsonException;

class HttpClient
{
    const ENDPOINT = 'https://client.api.dropshipping.cz/v1/';

    /** @var GuzzleHttp\Client */
    private $guzzle;


    /**
     * @param ApiConfig $apiConfig
     */
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
     * @return HttpResponse
     *
     * @throws HttpClientErrorException
     */
    public function get(string $url): HttpResponse
    {
        $response = $this->guzzle->get($url);

        return new HttpResponse($response, 'GET', $url);
    }


    /**
     * @param string $url
     * @param array  $body
     *
     * @return HttpResponse
     *
     * @throws HttpClientErrorException
     * @throws JsonException
     */
    public function post(string $url, $body = null): HttpResponse
    {
        $json = Json::encode($body);

        $options = array();

        $options[RequestOptions::HEADERS] = [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json'
        ];

        $options[RequestOptions::BODY] = $json;

        try
        {
            $response = $this->guzzle->post($url, $options);
        }
        catch (GuzzleHttp\Exception\ClientException $e)
        {
            $response = $e->getResponse();
        }

        return new HttpResponse($response, 'POST', $url);
    }
}