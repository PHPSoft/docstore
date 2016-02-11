<?php
namespace Pattern\ValueObject;

class BadDollar
{
    /**
     * @var type 
     */
    protected $amount;
    
    public function __construct($amount = 0)
    {
        $this->amount = (float)$amount;
    }
    
    /**
     * 
     * @return type
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * 
     * @param type $dollar
     */
    public function add($dollar)
    {
        $this->amount +=$dollar->getAmount();
    }
    
}