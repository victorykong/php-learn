<?php

class Super
{
    function __construct()
    {
        echo 'Super construct fn call' . '<br />';
    }
}


// 调用父类构造函数
class Child1 extends Super
{
    function __construct()
    {
        parent::__construct();
        echo 'Child1 construct fn call' . '<br />';
    }
}

// 不调用父类构造函数
class Child2 extends Super
{
    function __construct()
    {
        echo 'Child2 construct fn call' . '<br />';
    }
}

// 当前子类没有构造函数，默认调用父类构造函数（非private）
class Child3 extends Super
{
}

// Super construct fn call
new Super();
// Super construct fn call
// Child1 construct fn call
new Child1();
// Child2 construct fn call
new Child2();
// Super construct fn call
new Child3();
