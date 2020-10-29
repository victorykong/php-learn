<?php
// 字符串的4种表达方式
// $num = 1;

// 1. 单引号
// echo 'this is a number: ${num}'; // 不解析变量：this is a number: ${num}
// echo '支
// 持
// 多
// 行';

// 2. 双引号
// echo "this is a number: ${num}"; // 解析变量：this is a number: 1
// echo "支
// 持
// 多
// 行";




// 使用下标访问/修改字符串
// $str = 'hello';
// echo "${str}";
// echo "<br />";
// echo "${str[1]}";
// echo "<br />";

// $str[0] = '~';
// echo "${str}";


// // 获取字符串长度
// var_dump(strlen($str));
// echo '<br />';

// // 修改字符串最后一个字符
// $str[strlen($str) - 1] = '~';
// var_dump($str);




// 转换成字符串
var_dump(strval(1)); // '1'
var_dump(strval(1)); // '1'
var_dump(strval(false)); // ''
var_dump(strval(true)); // '1'
var_dump(strval(array(10))); // Array
var_dump(strval(null)); // ""
