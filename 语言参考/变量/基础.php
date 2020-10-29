<?php
// 一个变量赋值给另外一个变量，改变其中的值，将不会影响另一个
// ===== 传值赋值 =====
// 1.
// $str = 1;
// $_str = $str;
// $str = 2;
// echo $str; // 2
// echo $_str; // 1

// // 2.
// $arr = [1, 2, 3];
// $_arr = $arr;
// $arr[] = 4; // [3] => 4
// var_dump($arr);
// var_dump($_arr);

// // ===== 引用赋值 =====
// // 3.
// // 对象将会受到影响
// class MyObject
// {
//     var $name = 'vic';
// }
// $ins1 = new MyObject();
// $ins2 = $ins1;
// $ins1->$name = 'kong';
// var_dump($ins1);
// var_dump($ins2);



// isset 是否被初始化
var_dump(isset($str)); // bool(false)
