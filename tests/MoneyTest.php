<?php
/**
 * 
 * 
 * @author agostinho
 * @since 5/4/13 3:27 PM
 *   
 */

class MoneyTest extends PHPUnit_Framework_TestCase {

    public function testMoneyClassExists()
    {
        $this->assertTrue(class_exists('Money'));
    }

    public function testAvailableBills()
    {
        $bills = array(100,50,20,10,5,2);
        $money = new Money();
        $this->assertEquals($bills, $money->getBills());
    }

    public function testGetCoins()
    {
        $coins = array(100,50,25,10,5,1);
        $money = new Money();
        $this->assertEquals($coins, $money->getCoins());

    }
}
