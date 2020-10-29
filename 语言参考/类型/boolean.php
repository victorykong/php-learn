<?php
// $boolean = true;
// echo $boolean;


// 布尔值转换
var_dump((bool) ""); // 空字符串 
echo '<br />';
var_dump((bool) array()); // 空数组 <---------------
echo '<br />';
var_dump((bool) null); // null 
echo '<br />';
var_dump((bool) "0"); // 字符串"0" 
echo '<br />';
var_dump((bool) 0); // 整型值 0 -0 
echo '<br />';
var_dump((bool) -0); // 整型值 0 -0 
echo '<br />';
var_dump((bool) 0.0); // 浮点型值 0.0 -0.0 
echo '<br />';
var_dump((bool) -0.0); // 浮点型值 0.0 -0.0 
echo '<br />';
var_dump((bool) false); // false 本身
echo '<br />';
var_dump((bool) "1"); // true
echo '<br />';
var_dump((bool) array(10)); // true
echo '<br />';



// 省略php结束标记
