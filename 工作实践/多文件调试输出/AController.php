<?php

namespace my\controllers;

include './autoLoad.php'; // 自动加载了 XController & BaseController，而不需要 include

use XController;

// include './XController.php';


class AController
{
    public function dispatchSayHi()
    {


        // return '以下代码不执行，结束 --- end ---';

        $x_ins = new XController();
        return $x_ins->sayHi();
    }
}


$ins = new AController();
$res = $ins->dispatchSayHi();
var_dump($res);
