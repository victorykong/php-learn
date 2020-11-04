<?php

// $a = 1;
// $b = &$a;
// $a++;
// echo $b; // 2



// $a = 1;
// $b = &$a;
// $a++;
// unset($b); // <-- 抵消 line 11
// // echo $b; // Undefined variable: b 

// $b = 1;
// echo $b;





$a = 1;
$b = &$a;
$a++;

// 所以在重新赋值之前，取消引用吧！
unset($b);
$b = '我自己想重新赋值，不想保留对$a的引用'; // 但是会影响 $a
echo $a; // 2
echo $b;
