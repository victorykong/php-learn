<?php

// (int) $_GET['click_num'] ?? 0    会报错
$var = (int) ($_GET['click_num'] ?? 0);
var_dump($var);
