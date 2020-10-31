<?php

// 1. 某个对象的所有引用都被删除或者当对象被显式销毁时
// 2. 脚本关闭时调用
class Super
{
    // 可以监听一下关于本身的一些操作
    function __destruct()
    {
        echo 'Super destruct fn call';
    }
}

$s1 = new Super();
// $s1 = null; // 如果放开注释，那么析构函数先执行于下行


echo 'php last line' . '<br />';
