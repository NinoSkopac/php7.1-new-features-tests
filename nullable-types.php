<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/nullable_types

function getParam(?string $stringParam) : ?string {
    return $stringParam;
}

// these 2 work
getParam('hello');
getParam(null);

// this one doesn't
try {
    getParam();
} catch (Throwable $e) {
    print $e->getMessage();
}
