<?php

class myCalc{
    //properties
    public $operator;
    public $num1;
    public $num2;

    //method
    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;

    }

    public function calculator(){
        //why did we use $this->operator below
        switch ($this->operator) {
            case 'add':
                $result = $this -> num1 + $this ->num2;
                return $result;
                break;
            case 'sub':
                $result = $this -> num1 - $this ->num2;
                return $result;
                break;
             case 'div':
                $result = $this -> num1 / $this ->num2;
                return $result;
                break; 
             case 'mul':
                $result = $this -> num1 * $this ->num2;
                return $result;
                break;             
            default:
                echo "Error";
                break;
        }
    }
}