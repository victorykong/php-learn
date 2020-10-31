<?php

// $arr = [1, 2, 3];
// for ($i = 0; $i < count($arr); $i++) {
//     echo $arr[$i];
// }
// // count 为取得数组长度，这里每次都会获取一次，非常消耗性能

// // 以下 count 函数只会执行一次
// for ($i = 0, $count = count($arr); $i < $count; $i++) {
//     echo $arr[$i];
// }


$i = 0;
for (;;) {
    if ($i > 5) {
        break;
    }

    echo $i;
    $i++;
}
