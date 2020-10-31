<?php

// // 定义一个简单的类
// class MyObject
// {
//     public $name = 'vic'; // 定义一个属性

//     function sayHi() // 定义一个方法
//     // public function sayHi()
//     {
//         echo $this->name . ' Hi~';
//     }
// }
// $ins = new MyObject();
// echo $ins->name; // vic 
// $ins->sayHi(); // vic Hi~


// // $this
// class A
// {
//     function getThis()
//     {
//         echo isset($this) ? get_class($this) : 'this is not define';
//     }
// }
// $ins = new A(); // A
// $ins->getThis();
// A::getThis(); // this is not define 并且：getThis 不应该被静态调用，除非 static



// // & 的区别
// // 1.
// class MyObject
// {
//     public $name = 'vic';
// }
// $ins = new MyObject();

// $clone1 = $ins;
// $clone2 = &$ins;

// // 值同时改变
// $ins->name = 'kongxs';
// print_r($ins);
// echo '<br />';
// print_r($clone1);
// echo '<br />';
// print_r($clone2);
// echo '<br />';

// // true
// var_dump($ins instanceof MyObject);
// var_dump($clone1 instanceof MyObject);
// var_dump($clone2 instanceof MyObject);
// echo '<br />';

// // 修改 &，值同时改变
// $clone2->name = 'victorykong';
// var_dump($ins);
// echo '<br />';
// var_dump($clone1);
// echo '<br />';
// var_dump($clone2);
// echo '<br />';

// // 修改源对象
// $ins = null;
// var_dump($ins);
// echo '<br />';
// var_dump($clone1); // 不变，只要改变属性的时候才是引用赋值
// echo '<br />';
// var_dump($clone2);
// echo '<br />';




// 扩展
// class Super
// {
// }
// class Father extends Super
// {
// }
// class Child extends Father
// {
// }
// $c_ins = new Child();
// var_dump($c_ins instanceof Child);
// var_dump($c_ins instanceof Father);
// var_dump($c_ins instanceof Super);


// // 使用 parent:: 调用被覆盖的父类的方法或属性
// class Father
// {
//     public function sayName()
//     {
//         echo 'father';
//     }
// }
// class Child extends Father
// {
//     public function sayName()
//     {
//         parent::sayName(); // father
//         echo 'child'; // child
//     }
// }
// $c_ins = new Child();
// $c_ins->sayName();

// class Father
// {
//     static $name = 'father';
// }
// class Child extends Father
// {
//     public function sayFatherName()
//     {
//         echo parent::$name; // father
//     }
// }
// $c_ins = new Child();
// $c_ins->sayFatherName();

// 使用了 final 关键字的父类'方法'不可以被覆盖
class Father
{
    final public function getName()
    {
    }
}
class Child extends Father
{
    public $name = 'child';
    // public function getName() // Cannot override final method Father::getName()
    // {
    // }
}


// ::class
// namespace NS {
//     class ClassName
//     {
//     }
//     echo ClassName::class; // NS\ClassName
// }

// class MyObject
// {
//     public function getPath()
//     {
//         // echo MyObject::class; // MyObject
//         // echo get_class($this); // MyObject
//     }
// }
// (new MyObject())->getPath();
