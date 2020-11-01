<?php

namespace my2 {
    class MyObject
    {
    }

    function strlen()
    {
        echo 'my2 strlen';
    }

    // 但是我希望访问全局的那个 strlen 方法
    // strlen(); // my2 strlen

    $len = \strlen('abcd');
    echo $len; // 4
}

// // 如果写在全局的命名空间中，必须显式定义
// namespace {
//     include('./1.php');

//     $ins1 = new \my\MyObject();
//     $ins2 = new \my2\MyObject();

//     var_dump($ins1);
//     echo '<br />';
//     var_dump($ins2);
// }
