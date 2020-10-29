<?php
// var_dump(25/7);         // float(3.5714285714286) 
// var_dump((int) (25/7)); // 取整：int(3)
// var_dump(round(25/7));  // 向上取整：float(4) <------------------

// 转换为整形
// 1. (int) 或 (integer)
// 2. intval()

var_dump((int) '1');
echo '<br />';
var_dump(intval('1'));
echo '<br />';


var_dump((int) 1.1); // 1 浮点数将向下取整
echo '<br />';
var_dump((int) 1.8); // 1 浮点数将向下取整
echo '<br />';
var_dump(intval(1.1)); // 1 
echo '<br />';
var_dump(intval(1.8)); // 1 
echo '<br />';


var_dump((int) false); // 0 
echo '<br />';
var_dump((int) true); // 1
echo '<br />';
var_dump((int) null); // 0 
echo '<br />';
