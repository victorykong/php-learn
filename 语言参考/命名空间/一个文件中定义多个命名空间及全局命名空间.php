<?php

namespace my1 {
    class MyObject
    {
    }
}

namespace my2 {
    class MyObject
    {
    }
}


namespace {
    class MyObject
    {
    }
    $ins1 = new \my1\MyObject();
    $ins2 = new \my2\MyObject();
    $ins3 = new \MyObject();

    var_dump($ins1);
    echo '<br />';
    var_dump($ins2);
    echo '<br />';
    var_dump($ins3);
}
