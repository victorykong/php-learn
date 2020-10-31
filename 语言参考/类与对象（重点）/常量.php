<?php
class MyObject
{
    const constvar = 1; // 我是常量
    function getConst()
    {
        echo self::constvar;
    }
    static function setConst()
    {
        // self::constvar += 1; // syntax error, unexpected '++'
    }
}

// echo MyObject::constvar; // 1
// (new MyObject())->getConst(); // 1
MyObject::setConst();
