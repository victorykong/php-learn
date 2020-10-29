<?php
// $a = 1;

// function foo()
// {
//     echo $a; // Undefined variable '$a'.
// }
// foo();

// // 函数内部访问全局变量
// function foo()
// {
//     // global $a;
//     echo $GLOBALS['a']; // 1
// }
// foo();




// 函数静态变量：只有第一次调用函数时才会被初始化
// function foo()
// {
//     $a = 0; // 每次都初始化一下
//     echo $a; // 一直都是0
//     $a++;
// }

// function foo()
// {
//     static $a = 0; // 第一次调用foo才初始化
//     echo $a; // 0 1 2 3 4 ...
//     $a++;
// }

// 静态变量递归函数
// function loop()
// {
//     static $num = 0;
//     $num++;
//     echo $num;
//     if ($num < 5) {
//         loop();
//     }
// }
// loop();
