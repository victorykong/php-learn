<?php

$obj = [
    'foo' => 'bar',
];

$stringify = serialize($obj);
echo $stringify;
var_dump(unserialize($stringify));
