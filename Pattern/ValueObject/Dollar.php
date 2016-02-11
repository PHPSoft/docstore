<?php
namespace Pattern\ValueObject;

class Dollar
{
    protected $amount;
    
    public function __construct($amount = 0) 
    {
        $this->amount = (float)$amount;
    }
    
    public function getAmount()
    { 
        return $this->amount;
    }
    
    public function add($dollar)
    {
        return new Dollar($this->amount + $dollar->getAmount());
    }
    
}
