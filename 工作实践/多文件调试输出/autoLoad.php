<?php

spl_autoload_register(function ($class_name) {
    // echo $class_name . '<br />';
    require_once $class_name . '.php';
});
