<?php


function foo()
{
}
// // 不能重新定义 foo 函数 => Duplicate symbol declaration 'foo'
// function foo()
// {
// }

$foo = function () {
    echo 'foo1';
};
$foo = function () {
    echo 'foo2';
};
$foo(); // foo2
