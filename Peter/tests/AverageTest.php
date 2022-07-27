<?php
namespace TDD\Test; //needed for classes not needed functions
use PHPUnit\Framework\TestCase;  
use TDD\ArrayAverage;   //needed for classes not working/needed functions

// require_once "src/ArrayAverage.php"; //needed when not using classes




class AverageTest extends TestCase{

    public function testCalcAvg(){

        $obj = new ArrayAverage;
        // $input1 = [1,2,3,4,5];
        // $output = $obj->calcAvg($input1);
        $this->assertEquals(3, $obj->calcAvg([1,2,3,4,5]) , "Expected Value 3"); //object needed for classes, not needed when no classes
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