<?php
require 'vendor/autoload.php';

use OceanEngineManager\Controller\Manager;

$cookie = file_get_contents('cookie.txt');

$manager = new Manager($cookie);
# 获取当前用户状态
$result = $manager->getUserInfo();
echo($result);

# 上传人群包文件, 获取ID
//$path = __DIR__. '/../package/human.zip';
//$uploadResult = $manager->uploadFile($path);
//var_dump($uploadResult);

# 提交人群包数据
//$packageId = 'e4ff65017872db4a';
//$submitResult = $manager->submitPackage($packageId);
//echo($submitResult);

# 人群包状态获取
//$pid = '389883362';
//$statusResult = $manager->getPackageStatus($pid);
//var_dump($statusResult);

# 推送人群包
//$pid = '389883362';
//$statusResult = $manager->pushPackage($pid);
//echo($statusResult);

# 心跳同步
//$aliveResult = $manager->heartBeat();
//var_dump($aliveResult);
die;




