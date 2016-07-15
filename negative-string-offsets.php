<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/negative-string-offsets

$str = 'Hello world';

var_dump($str[-1]);
var_dump($str[-5]);
var_dump($str{-1});
var_dump($str{-5});

var_dump(isset($str[-1]));
var_dump(isset($str[-20]));

/*
Output

string(1) "d"
string(1) "w"
string(1) "d"
string(1) "w"
bool(true)
bool(false)
*/