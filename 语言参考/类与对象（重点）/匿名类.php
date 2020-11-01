<?php

// var_dump(new class
// {
// });



// 匿名类嵌套进普通类，不能访问 private 和 protected 的属性，需要通过构造函数传递
class MyObject
{
    public $name = 'myobject';
    private $age = 18;


    public function createAnonymousClass()
    {
        return new class ($this->age) extends MyObject
        {
            private $age;

            public function __construct($age)
            {
                $this->age = $age;
            }

            public function getInfo()
            {
                echo $this->name; // myobject
                echo $this->age; // 18
            }
        };
    }
}

$ins = new MyObject();
$anonymousClassIns = $ins->createAnonymousClass();
$anonymousClassIns->getInfo();
