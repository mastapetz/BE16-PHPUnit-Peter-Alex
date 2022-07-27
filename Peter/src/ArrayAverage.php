<?php 
namespace TDD;
class ArrayAverage{
    public function calcAvg(array $unitArray =[]){
        $unitArray = array_filter($unitArray);
        $averageU = array_sum($unitArray)/count($unitArray);
        return $averageU;
    }
}