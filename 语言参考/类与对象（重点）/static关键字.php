<?php

class MyObject
{
    public static $staticvar = '我是静态变量';
    public static function staticfn()
    {
        echo '我是静态方法';
    }
}

$ins = new MyObject();

// Undefined property: MyObject::$staticfn
// var_dump($ins->staticvar);
// $ins->staticfn(); // 我是静态方法

// success
// echo (MyObject::$staticvar);
// MyObject::staticfn();

echo $ins::$staticvar;
$ins::staticfn();
