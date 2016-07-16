<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/this_var

function reassignThis() : void {
    $var = 'this';
    
    $$var = rand();
}

try {
    reassignThis();
} catch (Error $e) {
    printf("Exception caught: %s", $e->getMessage());
}

print PHP_EOL;

function reassignThisThroughExtraction() : void {
    extract(['this' => rand()]);
}

try {
    reassignThisThroughExtraction();
} catch (Error $e) {
    printf("Exception caught: %s", $e->getMessage());
}

/*
Output

Exception caught: Cannot re-assign $this
Exception caught: Cannot re-assign $this
*/