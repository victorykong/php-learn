<?php

// 受命名空间影响：类(trait)、函数、常量、接口
// namespace 必须位于所有代码第一行

namespace my;

class MyObject
{
}

$ins1 = new MyObject(); // 当前命名空间内

$ins2 = new \my\MyObject(); // 绝对命名空间

$ins3  = new namespace \MyObject(); // namespace 指向

$len = strlen('hi'); // 后备全局

var_dump($ins1);
echo '<br />';
var_dump($ins2);
echo '<br />';
var_dump($ins3);
echo '<br />';
echo $len;
