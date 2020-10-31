<?php

$topvar = '顶级变量';

// Undefined variable '$topvar'.
// $foo1 = function () {
//     print_r($topvar); 
// };
// $foo1();

// $topvar = 'changed';
// $foo2 = function () use ($topvar) {
//     print_r($topvar);
// };
// $foo2(); // 顶级变量 => changed


// 绑定
$foo = function () {
    return $this->name;
};

class MyObject
{
    var $name = 'vic';
}

$ins = new MyObject();

$newFoo = $foo->bindTo($ins);
echo $newFoo();
