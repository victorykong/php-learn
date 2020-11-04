<?php


class AnotherObject
{
    public $msg = 'msg';
}

class MyObject
{
    public $name = 'obj name';
    public $ref;

    public function __construct($ref)
    {
        $this->ref = $ref;
    }
}


// $arr = [
//     'foo' => 'bar',
//     'arr' => [
//         0,
//         1,
//         2
//     ],
//     'obj' => new MyObject()
// ];

// // 1. 传值赋值
// $ref = $arr;
// $arr[] = 'new prop'; // 不会影响 $ref
// $arr['obj']->name = '我被修改了'; // 修改的是一个引用的引用，所以 $ref 会被修改
// print_r($arr);
// echo '<br />';
// print_r($ref);


// // 2. 引用赋值
// $ref = &$arr;
// $arr[] = 'new prop'; // 会影响 $ref
// $arr['obj']->name = '我被修改了'; // 修改的是一个引用的引用，所以 $ref 会被修改
// print_r($arr);
// echo '<br />';
// print_r($ref);


// clone 仅能用于 obj
// $a_ins = new AnotherObject();
// $ins = new MyObject($a_ins);
// $clone = clone $ins;
// $ins->name = '修改不会影响到 $clone';
// $ins->ref->msg = '修改会影响到 $clone';
// print_r($ins);
// echo '<br />';
// print_r($clone);


// 实现简单的深拷贝
function deepClone($source)
{
    $clone = [];
    foreach ($source as $key => $value) {
        if (gettype($value) !== "object") {
            $clone[$key] = $value;
        } else {
            $clone[$key] = clone $value;
        }
    }
    return $clone;
}
$a_ins = new AnotherObject();
$ins = new MyObject($a_ins);
$clone = deepClone($ins);
$ins->ref->msg = '修改会影响到 $clone'; // 不会影响到 $clone
print_r($ins);
echo '<br />';
print_r($clone);
