<?php

require __DIR__ . '/../../../vendor/autoload.php';

$url = 'http://123.206.87.240:8002/web6/';
$res = Requests::request($url);

//获取cookie,为下一次post做准备
$cookie = $res->cookies;

//对header头中的flag提示进行获取和解码
$margin = base64_decode(explode(': ', base64_decode($res->headers['flag']))[1]);

//获取请求结果
print_r(Requests::post($url, [], ['margin' => $margin], ['cookies' => $cookie]));
