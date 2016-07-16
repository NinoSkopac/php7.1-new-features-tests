<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/iterable

function returnNumericArray(iterable $array) : iterable {
    foreach ($array as $element) {
        $elements[] = $element;
    }
    
    return $elements ?? [];
}

$array = ['one' => 1, 'two' => 2];

// array example
print_r(returnNumericArray($array));

// object example
class AssociativeArrayIterator implements Iterator {
    protected $array;
    
    public function __construct(array $array) {
        $this->array = $array;
    }
    
    public function current() {
        return current($this->array);
    }
    
    public function key() : ?string {
        return key($this->array);
    }
    
    public function next() : void {
        next($this->array);
    }
    
    public function rewind() : void {
        reset($this->array);
    }
    
    public function valid() : bool {
        return isset($this->array[$this->key()]) ? true : false;
    }
}

print_r(returnNumericArray(new AssociativeArrayIterator($array)));
