<?php

namespace my2 {
    include('./1.php');
    include('./3.php');

    use my\MyObject;
    use my3\MyObject as MyObject3; // 起别名


    $ins = new MyObject();
    var_dump($ins);

    $ins3 = new MyObject3();
    var_dump($ins3);
}
