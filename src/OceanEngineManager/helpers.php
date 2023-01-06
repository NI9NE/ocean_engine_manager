<?php

if (! function_exists('config')) {
    function config($key = null, $default = null)
    {
        $delimiter = '.';
        if (empty($key)) return $default;
        $newConfig = CONFIG_ARRAY;
        if (strpos($key, $delimiter) !== false){
            $params = explode($delimiter, $key);
            foreach ($params as $value) {
                if (! isset($newConfig[$value])) return $default;
                $newConfig = $newConfig[$value];
            }
        }else{
            $newConfig = CONFIG_ARRAY[$key];
        }
        return $newConfig;
    }
}

if (! function_exists('generateChString')) {
    function generateChString($num){
        $b = '';
        for ($i=0; $i<$num; $i++) {
            $a = chr(mt_rand(0xB0,0xD0)).chr(mt_rand(0xA1, 0xF0));
            $b .= iconv('GB2312', 'UTF-8', $a);
        }
        return $b;
    }
}