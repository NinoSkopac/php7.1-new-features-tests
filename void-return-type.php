<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/void_return_type

// okay
function nothing() : void {
    print random_bytes();
}

// not okay
function nothing() : void {
    return random_bytes();
}

/*
Output

Fatal error: A void function must not return a value in ... on line 13
*/