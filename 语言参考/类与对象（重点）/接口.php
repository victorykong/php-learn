<?php
// 接口定义的成员全都为 public
// 必须实现接口所有定义
// 可以实现多个接口 ,

interface A
{
    function fooA();
}
interface B
{
    function fooB();
}

// class MyObject implements A
// {
//     public function fooA()
//     {
//         echo 'fooA';
//     }
// }
// (new MyObject())->fooA(); // fooA


class MyObject implements A, B
{
    public function fooA()
    {
        echo 'fooA';
    }
    public function fooB()
    {
        echo 'fooB';
    }
}
(new MyObject())->fooA(); // fooA
(new MyObject())->fooB(); // fooB
