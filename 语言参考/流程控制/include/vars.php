<?php

$a = 'a';
$b = 'b';


function foo()
{
    global $a;
    global $b;
    echo $a . '' . $b;
}
