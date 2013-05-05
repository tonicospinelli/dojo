<?php
/**
 * 
 * 
 * @author agostinho
 * @since 5/4/13 2:26 PM
 *   
 */

class Payment {

    /**
     * @var
     */
    protected $receivedValue;
    /**
     * @var
     */
    protected $oweValue;

    /**
     * @return mixed
     */
    public function getReceivedValue(){
        return $this->receivedValue;
    }

    /**
     * @param $value
     */
    public function setReceivedValue($value){
        $this->receivedValue = $value;
    }

    /**
     * @return mixed
     */
    public function getOweValue(){
        return $this->oweValue;
    }

    /**
     * @param $value
     */
    public function setOweValue($value){
        $this->oweValue = $value;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function isValid()
    {
        try{

            if($this->receivedValue <= $this->oweValue){
                throw new Exception('Received less than owe');
            }

            return true;

        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * @return mixed
     */
    public function getChangeValue()
    {
        $this->isValid();
        return $this->receivedValue - $this->oweValue;
    }

    /**
     * @return array
     */
    public function getChangeMoney()
    {
        $changeValue = $this->getChangeValue();
        $integer = floor($changeValue);
        $float = ($changeValue - $integer) * 100;
        $changeMoney = array();

        $money = new Money();
        $bills = $money->getBills();
        $coins = $money->getCoins();

        foreach($bills as $bill){
            if($bill <= $integer){
                $changeMoney['bills'][] = $bill;
                $integer = $integer - $bill;
            }
        }

        foreach($coins as $coin){
            if($coin <= $float){
                $changeMoney['coins'][] = $coin;
                $float = $float - $coin;
            }
        }
        return $changeMoney;

    }

}