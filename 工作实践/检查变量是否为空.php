<?php

// 1. 对于参数，前端是否有上传，是否有必要使用 isset 并且赋值为 null？最终交给了 empty() 函数判断
// es: $replyEndDate = isset($_POST["replyEndDate"]) ? $_POST["replyEndDate"] : null;


// empty: 检查一个变量是否为空（转 bool 为false的值也算）
// isset: 检查一个变量是否被定义，非null

function foo()
{
    // 注意：没有传递参数去获取，会报访问的索引（键名）找不到的错
    // ?? 适合给默认值
    // $var = $_POST['test'] ?? 'default value';
    // var_dump($var);


    // // 例如该接口原本的 test 参数现需要调整为 tst，需要兼容 test，应该如何做？
    // $var = $_POST['tst'] ?? $_POST['test'] ?? "";
    // var_dump($var);
    // if (empty($var)) { // "" -> true
    //     echo '$var 为空';
    // }



    // 空位合并再强化，"" 是否会赋默认值呢？
    // 所以在取参数赋默认值的时候，不确定前端是否会传这个值，不能使用 ??，因为对于 "" 也不会走 ??
    // $str = "";
    // $var = $str ?? 'default value';
    // var_dump($var); // ''

    // $arr = [];
    // $var = $arr ?? 'defalut value';
    // var_dump($var); // []

    $null = null;
    $var =  $null ?? 'default value';
    var_dump($var);
}
foo();
