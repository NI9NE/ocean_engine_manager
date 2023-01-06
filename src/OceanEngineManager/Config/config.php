<?php

return [
    'get_user_info' => [
        'method' => 'GET',
        'url' => 'https://business.oceanengine.com/nbs/api/bm/user/global_var/',
        'headers' => [
            'Accept-Encoding' => 'deflate, gzip',
            'User-Agent' => 'Apipost client Runtime/+https://www.apipost.cn/',
            'authority' => 'business.oceanengine.com',
            'accept' => 'application/json, text/plain, */*',
            'accept-language' => 'zh-CN,zh;q=0.9',
            'cache-control' => 'no-cache',
            'cookie' => '',
            'pragma' => 'no-cache',
            'referer' => 'https://business.oceanengine.com/site/dashboard?is_new_connect=0&is_new_user=0',
            'sec-ch-ua' => '"Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'sec-fetch-dest' => 'empty',
            'sec-fetch-mode' => 'cors',
            'sec-fetch-site' => 'same-origin',
            'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
            'x-csrf-token' => 'undefined',
            'x-csrftoken' => 'Yk_5sZTcjrhtMBuNh9UjtT4Z',
        ],
    ],

    'file_upload' => [
        'method' => 'POST',
        'url' => 'https://ad.oceanengine.com/dmp_node/api/normal_upload?aadvid=',
        'headers' => [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
            'Accept' => 'application/json, text/plain, */*',
            'Accept-Language' => 'zh-CN,zh;q=0.9',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
            'Cookie' => '',
            'Origin' => 'https://ad.oceanengine.com',
            'Pragma' => 'no-cache',
            'Referer' => 'https://ad.oceanengine.com/micro/dmp/audience/list?aadvid=1720009843930119',
            'Sec-Fetch-Dest' => 'empty',
            'Sec-Fetch-Mode' => 'cors',
            'Sec-Fetch-Site' => 'same-origin',
            'sec-ch-ua' => '"Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'Accept-Encoding' => 'deflate, gzip',
        ],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => ''
            ],
        ]
        //{"data":"e4ff65017872db4a","msg":"","status":0}
    ],
    'submit_package' => [
        'method' => 'POST',
        'url' => 'https://ad.oceanengine.com/dmp_node/api/upload_pack?aadvid=',
        //'url' => 'http://localhost/project/script/oceanengine_upload/bin/test/target.php',
        'headers' => [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36',
            'Accept' => 'application/json, text/plain, */*',
            'Accept-Language' => 'zh-CN,zh;q=0.9',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'Cookie' => '',
            'Origin' => 'https://ad.oceanengine.com',
            'Pragma' => 'no-cache',
            'Referer' => 'https://ad.oceanengine.com/micro/dmp/audience/list',
            'Sec-Fetch-Dest' => 'empty',
            'Sec-Fetch-Mode' => 'cors',
            'Sec-Fetch-Site' => 'same-origin',
            'sec-ch-ua' => '"Chromium";v="106", "Google Chrome";v="106", "Not;A=Brand";v="99"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'Accept-Encoding' => 'deflate, gzip',
        ],
        'json' => [
            "custom_type" => 11,
            "tag" => "系统推荐",
            "name" => "",
            "zip_file" => "",
            "category" => "0",
            "match_type" => "device_id"
        ],
        // {"data":"389883362","msg":"","status":0}
    ],
    'getPackageStatus' => [
        'method' => 'GET',
        'url' => 'https://ad.oceanengine.com/dmp_node/api/dmp/audience/detail?cid=[_CID_]',
        //'url' => 'http://localhost/project/script/oceanengine_upload/bin/test/target.php',
        'headers' => [
            'Accept' => 'application/json, text/plain, */*',
            'Accept-Language' => 'zh,zh-CN;q=0.9',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
            'Cookie' => '',
            'Pragma' => 'no-cache',
            'Referer' => 'https://ad.oceanengine.com/micro/dmp/audience/list?aadvid=1720009843930119',
            'Sec-Fetch-Dest' => 'empty',
            'Sec-Fetch-Mode' => 'cors',
            'Sec-Fetch-Site' => 'same-origin',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
            'sec-ch-ua' => '"Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'Accept-Encoding' => 'deflate, gzip'
        ],
    ],
    'push_package' => [
        'method' => 'POST',
        'url' => 'https://ad.oceanengine.com/dmp_node/api/audience_info/push?aadvid=',
        //'url' => 'http://localhost/project/script/oceanengine_upload/bin/test/target.php',
        'headers' => [
            'Accept' => 'application/json, text/plain, */*',
            'Accept-Language' => 'zh,zh-CN;q=0.9',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
            'Content-Type' => 'application/json',
            'Cookie' => '',
            'Origin' => 'https://ad.oceanengine.com',
            'Pragma' => 'no-cache',
            'Referer' => 'https://ad.oceanengine.com/micro/dmp/audience/list?aadvid=1720009843930119',
            'Sec-Fetch-Dest' => 'empty',
            'Sec-Fetch-Mode' => 'cors',
            'Sec-Fetch-Site' => 'same-origin',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
            'sec-ch-ua' => '"Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'Accept-Encoding' => 'deflate, gzip',
        ],
        'json' => [
            "custom_audience_ids" => [],
            "category" => 0,
            "advertiser_ids" => ["1720009843930119"],
            "is_brand" => false,
            "is_admin" => 0,
            "is_publish" => 1,
            "adv_type" => ""
        ],
    ],
    'heart_beat' => [
        'method' => 'POST',
        'url' => 'https://mcs.snssdk.com/v1/list',
        //'url' => 'http://localhost/project/script/oceanengine_upload/bin/test/target.php',
        'headers' => [
            'authority' => 'mcs.snssdk.com',
            'accept' => '*/*',
            'accept-language' => 'zh,zh-CN;q=0.9',
            'cache-control' => 'no-cache',
            'content-type' => 'application/json',
            'origin' => 'https://ad.oceanengine.com',
            'pragma' => 'no-cache',
            'referer' => 'https://ad.oceanengine.com/',
            'sec-ch-ua' => '"Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'sec-fetch-dest' => 'empty',
            'sec-fetch-mode' => 'cors',
            'sec-fetch-site' => 'cross-site',
            'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
            'Accept-Encoding' => 'deflate, gzip'
        ],
        'json' => [
            [
                "events" => [
                    [
                        "event" => "_be_active",
                        "params" => "{\"platform\":\"ad\",\"id\":\"1720009843930119\",\"start_time\":[_SEC_TIME_],\"end_time\":[_SEC_TIME_],\"url\":\"https://ad.oceanengine.com/micro/dmp/audience/list?aadvid=1720009843930119\",\"referrer\":\"https://ad.oceanengine.com/pages/promotion.html?aadvid=1720009843930119\",\"event_index\":[_SEC_TIME_]}",
                        "local_time_ms" => 0,
                        "is_bav" => 0,
                        "ab_sdk_version" => "",
                        "session_id" => "96461166-8b02-47c6-9705-88d7f3432533"
                    ]
                ],
                "user" => [
                    "user_unique_id" => "7184260807159498292",
                    "web_id" => "7184260807159498292",
                    "ssid" => "85ad9b99-47b9-48a1-844d-ff53f04c498d"
                ],
                "header" => [
                    "app_id" => 4287,
                    "os_name" => "windows",
                    "os_version" => "10",
                    "device_model" => "Windows NT 10.0",
                    "language" => "zh",
                    "platform" => "web",
                    "sdk_version" => "4.1.54",
                    "sdk_lib" => "js",
                    "timezone" => 8,
                    "tz_offset" => -28800,
                    "resolution" => "1920x1080",
                    "browser" => "Chrome",
                    "browser_version" => "107.0.0.0",
                    "referrer" => "https://ad.oceanengine.com/pages/promotion.html?aadvid=1720009843930119",
                    "referrer_host" => "ad.oceanengine.com",
                    "width" => 1920,
                    "height" => 1080,
                    "screen_width" => 1920,
                    "screen_height" => 1080,
                    "custom" => "{}"
                ],
                "verbose" => 1,
                "local_time" => 0
            ]
        ]
    ],
];
