<?php


class MyObject
{
    const MODIFY_REPLY_END = 1;
    const MODIFY_ANSWER_END = 2;
    protected $modifyDateMap = [
        self::MODIFY_REPLY_END => "回标",
        self::MODIFY_ANSWER_END => "答疑"
    ];


    public function foo()
    {
        var_dump($this->modifyDateMap[self::MODIFY_REPLY_END]);
        var_dump($this->modifyDateMap[self::MODIFY_ANSWER_END]);
    }
}

$ins = new MyObject();
$ins->foo();
