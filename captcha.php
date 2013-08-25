<?php
$site = $_GET['site'];
$site = empty($site) ? '183' : $site;
Header("Content-type: image/gif");

require 'core/Curl.class.php';
$curl = new Curl;
if($site == '183')
	$img = $curl->execCurl('http://intmail.183.com.cn/kaptcha.jpg?');

echo $img;
