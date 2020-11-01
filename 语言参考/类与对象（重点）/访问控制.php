<?php

// class Father
// {
//     public $name = 'father name';
//     private $age = 18;
//     protected $childName = [
//         'child'
//     ];
// }

// class Child extends Father
// {
//     public $name = 'child name';

//     public function getInfos()
//     {
//         var_dump($this->name);
//         echo '<br />';
//         // var_dump($this->age); // NULL
//         // echo '<br />';
//         var_dump($this->childName);
//     }
// }
// $ins = new Child();
// $ins->getInfos();


class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
$obj2 = new MyClass2();
$obj2->printHello(); // 输出 Public2、Protected2 和 Undefined