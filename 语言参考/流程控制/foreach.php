<?php

$arr = [
    1, 2, 3
];
// foreach($arr as $value) {
//     echo $value;
// }

// 不会修改原数组
// foreach ($arr as $value) {
//     ++$value;
// }
// print_r($arr);

// // 会修改 value
// foreach ($arr as &$value) {
//     ++$value;
// }
// print_r($arr); // [2,3,4]

// // 无效，也无意义
// foreach ([1, 2, 3] as &$value) {
//     ++$value;
// }

// // 只有&的情况下
// foreach ($arr as &$value) {
//     ++$value;
// }
// $value = '我被修改了'; // <----- 还保持着 $value 的引用
// print_r($arr); // Array ( [0] => 2 [1] => 3 [2] => 我被修改了 )

// foreach ($arr as &$value) {
//     ++$value;
// }
// unset($value); // <--- 解除引用
// $value = '我只是一个新的 $value 变量';
// print_r($arr); // [2,3,4]



// list 解构数组
// $arr = [
//     [1, 2],
//     [3, 4]
// ];
// foreach ($arr as list($value1, $value2)) {
//     echo $value1 . '' . $value2 . '<br />';
// }
