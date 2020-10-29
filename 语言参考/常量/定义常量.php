<?php

// // 1. const 的方式
// const 定义常量的方式必须位于顶部
// const FOO = 'foo const value';
// echo FOO;

// function foo()
// {
//     // const 无法被解析
// }
// foo();
// echo BAR;





// 2. define 的方式，支持表达式
// 建议大写
define('FOO', 'foo const value');
echo FOO; // foo const value

function foo()
{
    // 始终为全局范围
    // define('FOO', 'foo const value');
    define('BAR', 'bar const value');
}
foo();
echo BAR;

// 获取已定义的常量列表
// print_r(get_defined_constants()); // 可以找得到 FOO BAR
