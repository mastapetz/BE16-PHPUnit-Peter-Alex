<?php
use PHPUnit\Framework\TestCase;
use TDD\SumParam;

require_once "src/SumParam.php";

class ParamTest extends TestCase{
    public function testSumParam()
    {   
        $sum = new SumParam();
        $this->assertEquals("15",$sum->sumPa(1,3,4,5,2,1),"Expected Value is 15");
    }
}