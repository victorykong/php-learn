<?php

// // trait 复用维度是水平的，而不是 extends 垂直的
// trait UtilTools
// {
//     public $name = '工具类';
//     public function getValue()
//     {
//         echo 'getValue function';
//     }
// }

// class MyObject
// {
//     use UtilTools;
// }

// $ins = new MyObject();
// echo $ins->name;
// $ins->getValue();




trait ATools
{
    public function getValue()
    {
        echo 'ATools getValue function';
    }
}
trait BTools
{
    public function getValue()
    {
        echo 'BTools getValue function';
    }
}


class MyObject
{
    // 冲突了
    // use ATools, BTools;
    use ATools, BTools {
        // insteadof: 而不是

        // ATools::getValue insteadof BTools;
        // BTools::getValue insteadof ATools;

        ATools::getValue insteadof BTools;
        BTools::getValue as get_value; // 将 BTools 方法改名解决冲突

    }
}
$ins = new MyObject();
$ins->getValue();
$ins->get_value();
