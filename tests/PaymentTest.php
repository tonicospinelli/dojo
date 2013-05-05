<?php
/**
 * 
 * 
 * @author agostinho
 * @since 5/4/13 3:28 PM
 *   
 */

class PaymentTest extends PHPUnit_Framework_TestCase {

    /**
     *
     */
    public function testPaymentClassExists()
    {
        $this->assertTrue(class_exists('Payment'));
    }

    /**
     *
     */
    public function testGetAndSetReceivedValue()
    {
        $value = 10;
        $payment = new Payment;
        $payment->setReceivedValue($value);
        $this->assertEquals($value,$payment->getReceivedValue());
    }

    /**
     *
     */
    public function testGetAndSetOweValue()
    {
        $value = 10;
        $payment = new Payment;
        $payment->setOweValue($value);
        $this->assertEquals($value,$payment->getOweValue());
    }

    /**
     *
     */
    public function testDefaultValueOfReceivedValueEqualsZero()
    {
        $payment = new Payment();
        $this->assertEquals(0,$payment->getReceivedValue());
    }

    /**
     *
     */
    public function testDefaultValueOfOweValueEqualsZero()
    {
        $payment = new Payment();
        $this->assertEquals(0,$payment->getOweValue());
    }

    /**
     *
     */
    public function testReceivedMoreThanOwe()
    {
        $receivedValue = 10;
        $oweValue = 5;

        $payment = new Payment();
        $payment->setReceivedValue($receivedValue);
        $payment->setOweValue($oweValue);

        $this->assertTrue($payment->isValid());

    }

    /**
     *
     */
    public function testGetChangeValue()
    {
        $receivedValue = 5;
        $oweValue = 3;

        $changeValue = $receivedValue - $oweValue;

        $payment = new Payment();
        $payment->setReceivedValue($receivedValue);
        $payment->setOweValue($oweValue);

        $this->assertEquals($changeValue, $payment->getChangeValue());

    }

    /**
     *
     */
    public function testGetMoneyChange()
    {
        $receivedValue = 13;
        $oweValue = 10.50;
        $changeMoney = array(
            'bills' => array(2),
            'coins' => array(50),
        );

        $payment = new Payment();
        $payment->setReceivedValue($receivedValue);
        $payment->setOweValue($oweValue);

        $this->assertEquals($changeMoney, $payment->getChangeMoney());

    }

}
