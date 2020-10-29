<?php

echo __LINE__; // 3
echo __FILE__; // /opt/victorykong-study/php/html/语言参考/常量/魔术常量.php
echo __DIR__; // /opt/victorykong-study/php/html/语言参考/常量


function foo()
{
    echo __FUNCTION__; // foo
}
foo();




class MyObject
{
    function  sayClassName()
    {
        echo __CLASS__;
    }

    function  sayClassMethodName()
    {
        echo __METHOD__;
    }

    static function  _static_sayClassMethodName()
    {
        echo __METHOD__;
    }
}

$ins = new MyObject();
$ins->sayClassName(); // MyObject
echo "<br />";
$ins->sayClassMethodName(); // MyObject::sayClassMethodName
echo "<br />";
MyObject::_static_sayClassMethodName(); // MyObject::_static_sayClassMethodName
echo "<br />";
