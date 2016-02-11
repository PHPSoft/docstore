<?php
namespace Pattern\ValueObject;

class Work
{
    /**
     *
     * @var type 
     */
    protected $salary;
    
    public function __construct() {
        $this->salary = new Dollar(200);
    }
    
    /**
     * 
     * @return type
     */
    public function payDay()
    {
        return $this->salary;
    }
    
}