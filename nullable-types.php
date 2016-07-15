<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/nullable_types

function getParam(?string $stringParam) : ?string {
    return $stringParam;
}

// these 2 work
var_dump(getParam('hello'));
var_dump(getParam(null));

// this one doesn't
try {
    getParam();
} catch (Throwable $e) {
    printf("Exception caught: %s", $e->getMessage());
}

/*
Output

string(5) "hello"
NULL
Exception caught: Too few arguments to function getParam(), 0 passed in C:\php\dev\php7.1-tests\nullable-types.php on line 16 and exactly 1 expected
*/