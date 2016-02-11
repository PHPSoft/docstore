<?php
namespace Test;
include('Pattern/ValueObject/Work.php');
//include('Pattern/ValueObject/BadDollar.php');
include('Pattern/ValueObject/Dollar.php');
include('Pattern/ValueObject/Person.php');

use Pattern\ValueObject\Work;
use Pattern\ValueObject\Dollar;
//use Pattern\ValueObject\BadDollar;
use Pattern\ValueObject\Person;

class BadDollarTest extends \PHPUnit_Framework_TestCase
{
    public function testBadDollar()
    {
        $job = new Work;
        $p1 = new Person();
        $p2 = new Person();
        
        $p1->wallet = $job->payDay();
        $this->assertEquals(200, $p1->wallet->getAmount());
        $p2->wallet = $job->payDay();
        $this->assertEquals(200, $p2->wallet->getAmount()); 
        
        $p1->wallet->add($job->payDay());
        $this->assertEquals(400, $p1->wallet->getAmount());
         
        $this->assertEquals(200, $p2->wallet->getAmount());
        $this->assertEquals(200, $job->payDay()->getAmount());
    }
    
    public function testDollar()
    {
        $job = new Work;
        $p1 = new Person();
        $p2 = new Person();
        
        $p1->wallet = $job->payDay();
        $this->assertEquals(200, $p1->wallet->getAmount());
        $p2->wallet = $job->payDay();
        $this->assertEquals(200, $p2->wallet->getAmount()); 
        
        $p1->wallet->add($job->payDay());
        $this->assertEquals(400, $p1->wallet->getAmount()); 
         
        $this->assertEquals(200, $p2->wallet->getAmount());
        $this->assertEquals(200, $job->payDay()->getAmount());
    }
}