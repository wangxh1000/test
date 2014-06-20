<?php
error_reporting(E_ALL&~E_NOTICE);

$url=("http://www.baidu.com");
$file=fopen($url, 'r');
$string=file_get_contents($url);
// preg_match("/(<title>)(.+)(<\/title)/",$string,$tea);
preg_match('/(<title>)(.+)(<\/title)/',$string,$tea);
echo $tea[2];
print_r($tea);
?> 