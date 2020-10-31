<?php
spl_autoload_register(function ($name) {
    echo $name; // MyClass1 MyClass2
    require_once $name . '.php';
});



$ins1 = new MyClass1();
$ins2 = new MyClass2();
var_dump($ins1 instanceof MyClass1); // true
var_dump($ins2 instanceof MyClass2); // true
