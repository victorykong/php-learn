<?php

class MyObject
{
    public $arr = [1, 2, 3];

    public $arr2 = [
        'foo' => 'bar',
        'ref' => [
            0,
            1
        ]
    ];
}

// $ins = new MyObject();
// $clone = $ins;
// $ins->arr[] = 4;
// var_dump($ins);
// var_dump($clone);


// $ins = new MyObject();
// $clone = clone $ins;
// $ins->arr[] = 4;
// var_dump($ins);
// var_dump($clone);


$ins = new MyObject();
$clone = clone $ins;

$ins->arr2['foo'] = '被修改了'; // $clone 不受影响
$ins->arr2['ref'][0] = 999; // $clone 不受影响

var_dump($ins);
echo '<br />';
var_dump($clone);


// 想表达的意思是，使用 clone 复制对象的属性如果是一个引用，那么该属性仍然属于引用赋值【浅拷贝】