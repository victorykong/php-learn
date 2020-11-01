<?php

// 抽象类可被子类继承
// 抽象类自己不关心内部实现
// 抽象类中的方法必须被子类实现（没有函数体）
// 它其实也是一个普通的类
abstract class AbstractClass
{
    abstract public function getValue($value);
    public function sayHi()
    {
        echo 'Hi~';
    }
}


class Child extends AbstractClass
{
    public function getValue($value)
    {
        return $value;
    }
}


$ins = new Child();
echo $ins->getValue("hello");
$ins->sayHi();
