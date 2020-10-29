<?php

$str = '1';
$int = 1;
$floor = 1.1;
$bool = true;
$null = null;
$arr = [1, 2];
$fn = function () {
};


print_r(gettype($str));
echo '<br />';
print_r(gettype($int));
echo '<br />';
print_r(gettype($floor));
echo '<br />';
print_r(gettype($bool));
echo '<br />';
print_r(gettype($null));
echo '<br />';
print_r(gettype($arr));
echo '<br />';
print_r(gettype($fn));
echo '<br />';

// string
// integer
// double
// boolean
// NULL
// array
// object
