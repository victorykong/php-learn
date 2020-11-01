<?php
// try 不能单独使用

// // throw new Exception -> Exception
// // throw new Error -> Error
// try {
//     $hasError = true;
//     if ($hasError) {
//         // throw new Exception('error msg');
//         throw new Error('error msg');
//     } else {
//         echo 'success';
//     }
//     // } catch (Exception $e) {
// } catch (Error $e) {
//     // var_dump($e);
//     // echo $e->message; // message 为 protected 访问权
//     echo $e->getMessage(); // error msg
// }
// echo '<br />';
// echo '<br />';
// echo 'next line';


// // finally
// try {
//     $hasError = true;
//     if ($hasError) {
//         throw new Error('error msg');
//     } else {
//         echo 'success' . '<br />';
//     }
// } catch (Error $e) {
//     echo $e->getMessage();
// } finally {
//     echo 'action end';
// }
// echo '<br />';
// echo '<br />';
// echo 'next line';


// 嵌套异常
try {
    $hasError = true;

    try {
        if ($hasError) {
            throw new Error('error msg');
        }
    } catch (Error $e) {
        // rethrow: $e has been a Error instance
        // warning: only throw object
        throw $e;
    }
} catch (Error $e) {
    echo $e->getMessage();
} finally {
    echo 'action end';
}
echo '<br />';
echo '<br />';
echo 'next line';

// error msg
// action end 
// next line
