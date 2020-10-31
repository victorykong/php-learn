<?php

declare(strict_types=1);

function foo(bool $bool): ?string // 返回值是 null | string
{
    return $bool ? 'true' : null;
}

var_dump(foo(true)); // 'true'
var_dump(foo(false)); // null
