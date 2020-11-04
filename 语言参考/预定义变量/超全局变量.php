<?php
// 在函数中不需要使用 global 即可访问



// $_ENV

// -------------------------- $GLOBALS -------------------------- 
// $a = 1;
// function foo()
// {
//     echo $GLOBALS['a'];
// }
// foo(); // 1

// -------------------------- $_SERVER -------------------------- 
// function foo()
// {
//     // var_dump($_SERVER);
//     // echo $_SERVER['PHP_SELF'];
//     // echo __FILE__; // 绝对路径
//     // echo $_SERVER['SERVER_ADDR']; // 127.0.0.1
//     // echo $_SERVER['SERVER_NAME']; // localhost
//     // echo $_SERVER['REQUEST_TIME']; // 请求时间
//     // echo $_SERVER['REMOTE_ADDR']; // 127.0.0.1

//     $args = [
//         'PHP_SELF',
//         'argv',
//         'argc',
//         'GATEWAY_INTERFACE',
//         'SERVER_ADDR',
//         'SERVER_NAME',
//         'SERVER_SOFTWARE',
//         'SERVER_PROTOCOL',
//         'REQUEST_METHOD',
//         'REQUEST_TIME',
//         'REQUEST_TIME_FLOAT',
//         'QUERY_STRING',
//         'DOCUMENT_ROOT',
//         'HTTP_ACCEPT',
//         'HTTP_ACCEPT_CHARSET',
//         'HTTP_ACCEPT_ENCODING',
//         'HTTP_ACCEPT_LANGUAGE',
//         'HTTP_CONNECTION',
//         'HTTP_HOST',
//         'HTTP_REFERER',
//         'HTTP_USER_AGENT',
//         'HTTPS',
//         'REMOTE_ADDR',
//         'REMOTE_HOST',
//         'REMOTE_PORT',
//         'REMOTE_USER',
//         'REDIRECT_REMOTE_USER',
//         'SCRIPT_FILENAME',
//         'SERVER_ADMIN',
//         'SERVER_PORT',
//         'SERVER_SIGNATURE',
//         'PATH_TRANSLATED',
//         'SCRIPT_NAME',
//         'REQUEST_URI',
//         'PHP_AUTH_DIGEST',
//         'PHP_AUTH_USER',
//         'PHP_AUTH_PW',
//         'AUTH_TYPE',
//         'PATH_INFO',
//         'ORIG_PATH_INFO'
//     ];
//     foreach ($args as $arg) {
//         echo $_SERVER[$arg] . '<br />';
//     }
// }
// foo();



// // -------------------------- $_GET -------------------------- 
// // http://localhost:8080/html/语言参考/预定义变量/超全局变量.php?name=zs&age=18
// function foo()
// {
//     // print_r($_GET); // Array ( [name] => zs [age] => 18 )
//     // echo $_GET['name']; // zs
// }
// foo();



// // -------------------------- $_POST -------------------------- 
// // 只能接收格式为 x-www-form-urlencoded & form-data
// function foo()
// {
//     // var_dump($_POST); // json输出： array(0) {}，正确："name" => "zs"
//     echo $_POST['name']; // zs
// }
// foo();


// // -------------------------- $_FILES --------------------------
// // https://www.php.net/manual/zh/features.file-upload.php
// function foo()
// {
// }
// foo();


// // -------------------------- $_COOKIE --------------------------
// function foo()
// {
//     // var_dump($_COOKIE);
//     echo $_COOKIE['_ga']; // GA1.1.1908667094.1599011495
// }
// foo();


// // -------------------------- $_SESSION ---------------------------
// function foo()
// {
//     // session_start(); // Set-Cookie: PHPSESSID=2ovpv99cil4lpna95hc1bhnhun; path=/
// }
// foo();



// // --------------------------- $_REQUEST ---------------------------
// // 包含了 $_GET $_POST $_COOKIE（调试时不包含）
// // url: http://localhost:8080/html/语言参考/预定义变量/超全局变量.php?name=zs&age=18
// // method: POST
// // params: { sexy: 1 }
// function foo()
// {
//     // print_r($_REQUEST);
//     // [name] => zs
//     // [age] => 18
//     // [sexy] => 1
// }
// foo();
