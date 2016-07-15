<?php
declare(strict_types=1);

// aka Square bracket syntax for array destructuring assignment
// https://wiki.php.net/rfc/short_list_syntax

[$one, $two, $three] = range(1, 3);

var_dump($one, $two, $three);

/*
Output

int(1)
int(2)
int(3)
*/