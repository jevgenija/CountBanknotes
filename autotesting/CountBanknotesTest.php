<?php
/**
 * Description of CountBanknotesTest
 *
 * @author Jevgenija
 */
require_once('/../CountBanknotes.php');

class CountBanknotesTest extends PHPUnit_Framework_TestCase {

    public function setUp() {    
    }

    public function tearDown() {
    }

    public function testCount() {
        $connObj = CountBanknotes::Instance();
        for ($price = 0; $price <= 10000; $price++) {
            $result = $connObj->count($price);
            $this->assertInternalType('int', $result);
        }

        return $connObj->count($price);
    }

}
