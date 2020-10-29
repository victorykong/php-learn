<?php

// $arr = array(0 => 1, 1 => 2, "foo" => "bar", 3);
// var_dump($arr[2]); // 3
// var_dump($arr['foo']); // bar
// 推荐写法：
// $arr = [
//     0 => 1,
//     1 => 2,
//     "foo" => "bar",
//     3
// ];
// var_dump($arr[2]); // 3
// var_dump($arr['foo']); // bar


// 覆盖
// $arr = [
//     0 => 1,
//     0 => 2,
//     0 => 3,
// ];
// var_dump($arr[0]); // 3

// 嵌套数组
// $arr = [
//     [
//         "foo" => "bar"
//     ]
// ];
// var_dump($arr[0]['foo']); // bar



// 返回数组的函数
// function getArray()
// {
//     return [1, 2, 3];
// }
// var_dump(getArray()[0]); // 1


// 删除数组中某个元素，索引不会重建
// $arr = [1, 2, 3];
// unset($arr[0]);
// var_dump($arr); // array(2) { [1]=> int(2) [2]=> int(3) }


// // $arr[] = ：使用 [] 修改，将会创建一个新单元
// $arr = [1, 2, 3];
// $arr[] = 4;
// var_dump($arr); // [1,2,3,4] 

// // 删除数组所有元素
// unset($arr);
// var_dump($arr); // NULL


// unset删除各个元素
// $arr = [1, 2];
// foreach ($arr as $index => $value) {
//     // unset($arr[$index]);

//     // 错误的：
//     // unset($value);
// }
// var_dump($arr);
// $arr[] = 5; // 索引为2的单元
// var_dump($arr); // array(1) { [2]=> int(5) }


// 重建索引
// $arr = [1, 2];
// foreach ($arr as $index => $value) {
//     unset($arr[$index]);
// }
// var_dump($arr);
// echo "<br />";
// // print_r(array_values($arr)); // Array ( )
// $arr = array_values($arr);
// $arr[] = 5;
// var_dump($arr); // array(1) { [0]=> int(5) }



// 转换为数组
// $arr = '[1,2,3]';
// var_dump((array) $arr);


// // 数组排序
// $arr = [2,1,3];
// print_r(sort($arr));

// $arr = [1,2];
// // 值的拷贝
// $clone = $arr;
// $clone[0] = 0;
// print_r($clone);
// print_r($arr);

// // 引用
// $clone = &$arr; // 深拷贝
// $clone[0] = [0];
// print_r($clone);
// print_r($arr);


// $juices = array("apple", "orange", "koolaid1" => "purple");
// $koolaid1 = 'koolaid1';
// echo "$juices[0]";
// echo "<br />";
// echo "$juices[1]";
// echo "<br />";
// echo "$juices[$koolaid1]";
// echo "<br />";
