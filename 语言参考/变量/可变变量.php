<?php

// $key = 'name';
// $$key = 'victorykong'; // $name = '...'
// echo $name; // victorykong

// 数组
// $arr = [1, 2, 3];
// print_r($arr[$arr[0]]); // $arr[1]: 2

// // 将arr[1]的值作为可变变量 => ${'bar'} => $bar
// $arr = ['foo', 'bar'];
// $bar = 'bar';
// var_dump(isset(${$arr[1]}));


// 将 arr 作为可变变量，并访问可变变量之后的[1] => ${$key} => ${'arr'} => $arr[1]
// $key = 'arr';
// $arr = [1, 2, 3];
// var_dump(${$key}[1]); // 2
