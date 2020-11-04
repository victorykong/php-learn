<?php

// $res = fopen('我是一个文件.php', 'r');
// var_dump($res);

$res = file_get_contents('我是一个文件.php');
var_dump($res);
