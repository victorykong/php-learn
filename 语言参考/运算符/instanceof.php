<?php
interface SuperInterface
{
}

class Super implements SuperInterface
{
}

class MyObject extends Super
{
}
$ins = new MyObject();
$ins2 = new MyObject();

var_dump($ins instanceof MyObject); // true

var_dump($ins instanceof $ins2); // true

var_dump($ins instanceof Super); // true

var_dump($ins instanceof SuperInterface); // bool(true)
