<?php


class MyObject
{
    const MODIFY_REPLY_END = 1;
    const MODIFY_ANSWER_END = 2;


    public function foo($t = null)
    {
        $type = isset($t) ? (int) $t : self::MODIFY_REPLY_END; 
        // var_dump($type);


        switch ($type) {
            case self::MODIFY_REPLY_END:
                break;
            case self::MODIFY_ANSWER_END:
                break;
            default:
                echo 'error';
                break;
        }
    }
}


$ins = new MyObject();

$ins->foo(); // 老接口，没传递参数的，便默认为 1
// $ins->foo(""); // 知道type参数的，传了个空，int("") => 0
// $ins->foo(3); // 知道type参数的，传了3，但不是我们想要的值，需要报错
