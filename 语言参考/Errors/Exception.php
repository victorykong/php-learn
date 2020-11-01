<?php


// 自定义一个 MyExcpetion 类
class MyExcpetion extends Exception
{
    const ERROR_CODE_1 = 101;
    const ERROR_CODE_2 = 102;
    const ERROR_CODE_3 = 103;


    // redefine message is required
    public function __construct($message, $code = self::ERROR_CODE_1)
    {
        // ...
        parent::__construct($message, $code); // 确保变量正确赋值
    }

    // 该方法 catch Exception $e，$e 被转换为字符串时输出
    public function __toString()
    {
        // $this->code, $this->message 来源于父类 Exception
        return get_class($this) . ": [$this->code]" . "[$this->message]";
    }
}

try {
    throw new MyExcpetion('error msg');
} catch (Exception $e) {
    echo $e . '<br />';
    // echo $e->getMessage();
} finally {
    echo 'action end';
}
echo 'next line';


// MyExcpetion: [101][error msg]
// action endnext line
