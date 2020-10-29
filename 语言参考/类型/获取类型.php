<?php

$str = '1';
$int = 1;
$float = 1.1;
$bool = true;
$null = null;
$arr = [1, 2];
$fn = function () {
};
$nan = NAN;


print_r(gettype($str));
echo '<br />';
print_r(gettype($int));
echo '<br />';
print_r(gettype($float));
echo '<br />';
print_r(gettype($bool));
echo '<br />';
print_r(gettype($null));
echo '<br />';
print_r(gettype($arr));
echo '<br />';
print_r(gettype($fn));
echo '<br />';
print_r(gettype($nan)); // <------
echo '<br />';
// string
// integer
// double
// boolean
// NULL
// array
// object
// double


// 确定变量类型
var_dump(is_array($arr));
var_dump(is_float($float));
var_dump(is_int($int));
var_dump(is_object($fn));
var_dump(is_string($str));
var_dump(is_null($null));
var_dump(is_nan($nan));
var_dump(is_bool($bool));
