<?php
// // self:: __CLASS__ 取决于定义所在的类
// class A
// {
//     public static $name = 'A';

//     public function getName()
//     {
//         echo self::$name;
//     }
//     public function sayClassName()
//     {
//         echo __CLASS__;
//     }
// }

// class B extends A
// {
//     public static $name = 'B';
// }

// $ins = new B();
// $ins->getName(); // A 而不是 B
// $ins->sayClassName(); // A 而不是 B


// // static:: 则与上述结果相反
// class A
// {
//     public static $name = 'A';

//     public function getName()
//     {
//         echo static::$name; // 静态引用绑定
//     }
// }

// class B extends A
// {
//     public static $name = 'B';
// }

// $ins = new B();
// $ins->getName(); // B 而不是 A
