<?php

namespace OceanEngineManager\Service;

use GuzzleHttp\Client;

class HttpService
{
    protected $cookie;

    protected $client;

    private $options = [
        'time' => 5,
    ];

    private $response;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function setCookie($value)
    {
        $this->cookie = $value;
    }

    public function getCookie()
    {
        return $this->cookie;
    }

    public function setOptions(array $options)
    {
        if (isset($options['headers']) && isset($options['headers']['cookie']))
            $options['headers']['cookie'] = $this->cookie;

        if (isset($options['headers']) && isset($options['headers']['Cookie']))
            $options['headers']['Cookie'] = $this->cookie;

        $this->options = array_merge($this->options, $options);
    }

    /**
     * @param string $method
     * @param string $url
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendRequest(string $method, string $url)
    {
        $this->response = $this->client->request($method, $url, $this->options);
    }


    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    public function getResponseStatus()
    {
        return $this->response->getStatusCode();
    }

    public function getResponseBody()
    {
        return $this->response->getBody()->getContents();
    }
}