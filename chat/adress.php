<?php

$ip = (string) ($_SERVER['REMOTE_ADDR']);
$ip = (int) ($ip);

$red = (31 * $ip + 41) % 255;
$green = (71 * $ip + 89) % 255;
$blue = (101 * $ip + 127) % 255;

$circle = '<div id="circle" style="background-color: rgb('.$red.','.$green.','.$blue.')"></div>';

?>