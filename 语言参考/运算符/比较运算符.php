<?php
// // switch case 的比较是松散类型的
// $a = 'a';
// var_dump($a == 0); // true
// var_dump((int) $a); // int(0)

// switch ($a) { // 字符串会被转换为数值
//     case 0:
//         echo "0";
//         break;
//     case "a": // never reached because "a" is already matched with 0
//         echo "a";
//         break;
// }

// 三元表达式
// $var = true ?: false;
// var_dump($var); // bool(true)

// // Q1:
// function foo()
// {
//     $var = 42;
//     $a = 'a';
//     $b = 'b';

//     return $var === 42 ? $a : $b;
// }
// echo foo();


// Q2:
// echo (true ? 'true' : false ? 't' : 'f');
// echo ((true ? 'true' : 'false') ? 't' : 'f');

// // Q3:
// function foo()
// {
//     $foo = null;
//     $bar = 'default value';
//     return $foo ?? $bar;
// }
// echo foo();
