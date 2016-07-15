<?php
declare(strict_types=1);

// https://wiki.php.net/rfc/class_const_visibility

class ModernConstants {
    public const PRODUCT_NAME = 'Shampoo';
    
    protected const DEVELOPER_FULLNAME = 'Bill Jobs';
    
    private const ROOT_PASSWORD = '23mrp23rj2tp3j2r';
    
    public function getRootPassword() : string {
        return self::ROOT_PASSWORD;
    }
}

class ProtectedConstantAccessor extends ModernConstants {
    public function getDeveloperFullname() : string {
        return parent::DEVELOPER_FULLNAME;
    }
}

$parent = new ModernConstants;
$child = new ProtectedConstantAccessor;

printf('Product name: %s', $parent::PRODUCT_NAME);
print PHP_EOL;

printf('Full developer name: %s', $child->getDeveloperFullname());
print PHP_EOL;

printf('Root password: %s', $parent->getRootPassword());
print PHP_EOL;

/*
Output

Product name: Shampoo
Full developer name: Bill Jobs
Root password: 23mrp23rj2tp3j2r
*/
