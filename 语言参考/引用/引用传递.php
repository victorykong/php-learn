<?php

// 三种方式
// foo(&$var)
// foo(new MyObject())
// &foo(){ return $var } + $var = &foo(); -> 两处都需要 &


// // 1.
// $a = 1;
// function foo(&$var)
// {
//     $var++;
// }
// foo($a);
// echo $a; // 2


// // 2.
// class MyObject
// {
//     public $name = 'vic';
// }
// function foo($var)
// {
//     $var->name = '我被修改了';
// }
// $ins = new MyObject();
// foo($ins);
// var_dump($ins);


// 3. 函数返回引用值，外部接受引用值
class MyObject
{
    public $name = 'vic';

    // &foo 该函数会返回引用
    public function &foo()
    {
        return $this->name;
    }
}

$ins = new MyObject();
$var = &$ins->foo();

$var = '我被修改了';

echo $var; // 我被修改了
echo $ins->name; // 我被修改了
