<?php
class Person
{
    const name = 'name';
    const  age = 'age';
    public static $sayHi = 'sayHi';
}

$name = 'victorykong';
$age = '18';
$sayHi = 'sayHi';


echo "{${Person::name}}";
echo "<br />";
echo "{${Person::age}}";
echo "<br />";
echo "{${Person::$sayHi}}";
