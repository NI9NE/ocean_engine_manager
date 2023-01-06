<?php

namespace OceanEngineManager\Controller;

use GuzzleHttp\Exception\GuzzleException;

class Controller
{
    public static function init()
    {
        self::initConfig();
    }

    private static function initConfig()
    {
        $config = [
            'config' => include __DIR__.'/../Config/config.php'
        ];
        define('CONFIG_ARRAY', $config);
    }


    public function error(GuzzleException $e)
    {
        die($e->getMessage());
    }

}