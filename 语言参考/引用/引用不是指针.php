<?php

// function foo($var)
// {
//     $var++;
// }
// $a = 1;
// foo($a);
// echo $a; // 1


// // &
// function foo(&$var)
// {
//     // $var 和 $a 指向了同一个变量
//     $var++;
// }
// $a = 1;
// foo($a);
// echo $a; // 2



// // $a = &$var
// function foo(&$var)
// {
//     // 1. $var 在函数内部原本引用的是 $a
//     // 2. 将 $var 改为了 $b
//     $var = &$GLOBALS['b'];
//     $var++;
// }
// $a = 1;
// $b = 99;
// foo($a);
// echo $a; // 1
// echo $b; // 100




// 为什么说引用不是指引呢？
$a = 1;
$b = '新引用';
function foo()
{

    // // 1. 仅仅只是获取到了全局上的 $a
    // $var = $GLOBALS['a']; 
    // $var++;
    // echo 'foo inner ->' . $var . '<br />'; // 2

    // 2. 获取到了全局上的 $a 的引用，以下两种相等
    // 2.1
    // global $a;
    // $a++;
    // echo 'foo inner ->' . $a . '<br />'; // 2

    // 2.2
    // $ref = &$GLOBALS['a'];
    // $ref++;
    // echo 'foo inner ->' . $ref . '<br />'; // 2

    // 3. 得到了引用之后，再将它重新赋值，惯性思维会觉得将引用（以指针的形式重新指向，带跑了全局$a的指向）
    global $a, $b;
    $a = &$b;
    echo 'foo inner ->' . $a . '<br />'; // 新引用

}
foo();

// 1.
// echo $a; // 1

// 2.
// 2.1 & 2.2
// echo $a; // 2

// 3.
echo $a; // 1
