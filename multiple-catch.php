<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/multiple-catch

namespace Potato {
    class Exception extends \Exception {
        public function __construct($message) {
            return parent::__construct($message);
        }
    }
}

namespace Tomato {
    class Exception extends \Exception {
        public function __construct($message) {
            return parent::__construct($message);
        }
    }
}

namespace {
    function throwPotato() : void {
        throw new Potato\Exception('Potato thrown.');
    }
    
    function throwTomato() : void  {
        throw new Tomato\Exception('Tomato thrown.');
    }
    
    try {
        throwPotato();
        throwTomato();
    } catch (Potato\Exception | Tomato\Exception $e) {
        printf("Exception caught: %s", $e->getMessage());
    }
}

/*
Output

Exception caught: Potato thrown.
*/