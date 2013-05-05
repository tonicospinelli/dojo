<?php
/**
 * 
 * 
 * @author agostinho
 * @since 5/4/13 3:20 PM
 *   
 */

class Money {

    /**
     * @var array
     */
    protected $bills = array(100,50,20,10,5,2);
    /**
     * @var array
     */
    protected $coins = array(100,50,25,10,5,1);


    /**
     * @return array
     */
    public function getBills()
    {
        return $this->bills;
    }

    /**
     * @return array
     */
    public function getCoins()
    {
        return $this->coins;
    }
}