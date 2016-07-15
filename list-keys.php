<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/list_keys

class NationalFoods {
    private $foods;
    
    public function __construct(array $nationalFoods) {
        // this ...
        list(
            'thailand' => $this->foods['thailand'],
            'uk' => $this->foods['uk'],
            'usa' => $this->foods['usa']
        ) = $nationalFoods;
    }
    
    public function __destruct() {
        print_r($this->foods);
    }
}

new NationalFoods(
    [
        'thailand' => 'Pad Thai',
        'uk' => 'Fish and Chips',
        'usa' => 'Burgers'
    ]
);

/*
Output

Array
(
    [thailand] => Pad Thai
    [uk] => Fish and Chips
    [usa] => Burgers
)
*/