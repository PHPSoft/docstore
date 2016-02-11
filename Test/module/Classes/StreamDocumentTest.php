<?php

class StreamDocumentTest extends PHPUnit_Framework_TestCase 
{
    
    public function testTrueIsTrueTwo()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
    
    /**
     * Data provider for testHasConsultant
     *
     * @return array
     */
    public function ProviderhasData()
    {
            return array(
                array(false, false),
                array(false, false),
                array(true, false),
                array(false, false),
                array(false, false),
                array(true, true)
            );
    }

    /**
     * @covers StreamDocument::hasData
     * @dataProvider ProviderhasData
     * @param boolean $val1
     * @param boolean $res1
     */
    public function testHasData($val1,$res1)
    {
        $this->assertEquals($res1, $val1);
    }
}