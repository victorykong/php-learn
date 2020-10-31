<?php

// 开启严格类型模式
declare(strict_types=1);

// function foo(int $num)
// {
//     print_r($num);
// }
// foo('1'); // Expected type 'int'. Found 'string'.




// // 剩余参数数组
// function foo($number, ...$args)
// {
//     print_r($number);
//     print_r($args);
// }
// foo(1,  1, '1', true, [1, 2], ['foo' => 'bar']);
// // 1
// // [1, '1', true, [1, 2], ['foo' => 'bar']]


// // 旧版本实现
// function foo()
// {
//     $args = func_get_args(); // 获取传递的所有参数 [...]
//     print_r($args);
// }
// foo(1,  1, '1', true, [1, 2], ['foo' => 'bar']);
// // [1,  1, '1', true, [1, 2], ['foo' => 'bar']]
