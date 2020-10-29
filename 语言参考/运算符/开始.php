<?php
// // 除法运算符总是返回浮点数，除非两个数都为整数，并且能整除
// $num = 2;
// $res = $num / 2;
// var_dump($res);
// var_dump(intdiv(2, 4)); // 0.5 取整得 0



// 赋值运算符 = 
// php中都是传值赋值，改变一个不会影响另一个，object 除外（除非明确指定了 clone 关键字）

// $arr = [1, 2, 3];
// $clone = $arr;
// $arr[] = 4;
// print_r($clone); // [1,2,3]

// class MyObject
// {
//     // static $name = 'vic';
//     var $name = 'vic';
// }
// // print_r(MyObject::$name);
// $ins = new MyObject();
// $clone = $ins;
// var_dump($ins->$name); // 此语法是错误的 $ins->name 可以成功

// class MyObject
// {
//     var $name = 'vic';
// }
// $ins = new MyObject();
// $clone = $ins;
// $ins->name = 'kongxs';
// print_r($ins);
// print_r($clone); // 被修改了

// class MyObject
// {
//     var $name = 'vic';
// }
// $ins = new MyObject();
// $clone = clone($ins); // <--------
// $ins->name = 'kongxs';
// print_r($ins);
// print_r($clone); // 不会被修改


// 不允许直接
// $ins2 = &new MyObject(); // Parse error: syntax error, unexpected 'new'


// 字符串拼接
// $str = 'hello';
// print_r($str . ' world'); // hello world


// 空位（null）合并
$null = null;
$res = $null ?? 'default value';
print_r($res); // default value