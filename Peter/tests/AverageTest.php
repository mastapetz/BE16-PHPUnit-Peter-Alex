<?php
namespace TDD\Test;
use PHPUnit\Framework\TestCase;
use TDD\ArrayAverage;

require_once "src/ArrayAverage.php";




class AverageTest extends TestCase{

    public function testCalcAvg(){

        $obj = new ArrayAverage;
        $input1 = [1,2,3,4,5];
        $output = $obj->calcAvg($input1);
        $this->assertEquals(3, $output , "Expected Value 3");
        $obj = new ArrayAverage;
        $input2 = [3,3,3,3,3];
        $output = $obj->calcAvg($input2);
        $this->assertEquals(3, $output , "Expected Value 3");
        $obj = new ArrayAverage;
        $input3 = [3,4,3,4,1];
        $output = $obj->calcAvg($input3);
        $this->assertEquals(3, $output , "Expected Value 3");
        $obj = new ArrayAverage;
        $input4 = [5,2,3,4,6];
        $output = $obj->calcAvg($input4);
        $this->assertEquals(5, $output , "Expected Error, real result 4");
    }
}