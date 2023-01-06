<?php

namespace OceanEngineManager\Controller;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\RequestOptions;
use OceanEngineManager\Service\HttpService;

class Manager extends Controller
{
    protected $service;

    protected $config;

    public function __construct(string $cookie)
    {
        parent::init();
        $this->service = new HttpService();
        $this->service->setCookie($cookie);
    }

    public function getUserInfo()
    {
        return $this->sendRequest(config('config.get_user_info'));
    }

    public function uploadFile(string $filePath)
    {
        return $this->uploadRequest(config('config.file_upload'), $filePath);
    }

    public function submitPackage($pid)
    {
        $form = config('config.submit_package.json');
        $form['zip_file'] = $pid;
        $form['name'] = generateChString(6);
        return $this->jsonRequest(config('config.submit_package'), $form);
    }

    public function getPackageStatus($pid)
    {
        $config = config('config.getPackageStatus');
        $config['url'] = str_replace('[_CID_]', $pid, $config['url']);
        return $this->sendRequest($config);
    }

    public function pushPackage($pid)
    {
        $json = config('config.push_package.json');
        array_push($json['custom_audience_ids'], $pid);
        return $this->jsonRequest(config('config.push_package'), $json);
    }

    public function heartBeat()
    {
        $json = config('config.heart_beat.json');
        return $this->jsonRequest(config('config.heart_beat'), $this->replaceHBParams($json));
    }


    private function replaceHBParams(array $json)
    {
        $localTime = time();
        $secTime = intval(microtime(true) * 1000);
        foreach ($json as $index => &$item) {
            if (!empty($item)){
                $params = $item['events'][0]['params'];
                $item['events'][0]['params'] = str_replace('[_SEC_TIME_]', $secTime, $params);
                $item['events'][0]['local_time_ms'] = $secTime;
                $item['local_time'] = $localTime;
            }
            var_dump($item);
        }
        return $json;
    }

    public function sendRequest($config)
    {
        $url = $config['url'];
        $method = $config['method'];
        $headers = $config['headers'];

        $this->service->setOptions([RequestOptions::HEADERS => $headers]);
        try {
            $this->service->sendRequest($method, $url);
        } catch (GuzzleException $e) {
            $this->error($e);
        }

        $response = $this->service->getResponseBody();
        return $response;
    }

    public function uploadRequest($config, string $filePath)
    {
        $url = $config['url'];
        $method = $config['method'];
        $headers = $config['headers'];

        $multipart = $config['multipart'];
        $content =  Utils::tryFopen($filePath, 'r');
        $multipart[0]['contents'] = $content;

        $this->service->setOptions([RequestOptions::MULTIPART => $multipart]);
        $this->service->setOptions([RequestOptions::HEADERS => $headers]);
        try {
            $this->service->sendRequest($method, $url);
        } catch (GuzzleException $e) {
            $this->error($e);
        }

        $response = $this->service->getResponseBody();
        return $response;
    }

    public function jsonRequest(array $config, array $json)
    {
        $url = $config['url'];
        $method = $config['method'];
        $headers = $config['headers'];

        $this->service->setOptions([RequestOptions::JSON => $json]);
        $this->service->setOptions([RequestOptions::HEADERS => $headers]);
        try {
            $this->service->sendRequest($method, $url);
        } catch (GuzzleException $e) {
            $this->error($e);
        }

        $response = $this->service->getResponseBody();
        return $response;
    }




}