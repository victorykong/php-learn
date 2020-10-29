<?php
// class MyObject
// {
//     function sayHi()
//     {
//         echo 'sayHi~';
//     }
// }
// $ins = new MyObject();
// $ins->sayHi();


// 转换为对象

// 1. 数组，创建一个内置类stdClass
// $arr = ['foo' => 'bar', 'bar' => 'foo'];
// $obj = (object) $arr;
// print_r($obj); // stdClass Object ( [foo] => bar [bar] => foo
// print_r(key($obj)); // Expected type 'array'. Found 'object'.
// print_r(key($arr)); // foo

// 2. 对象
// class MyObject
// {
//     var $name = 'vic';
// }
// $ins = new MyObject();
// print_r($ins);
// print_r((object) $ins);

// 3. 其它
$str = 'hello world';
$obj = (object) $str;
print_r($obj->scalar); // 包含进成员变量名 scalar
