<?php

abstract class Shape{

    public $width;
    public $high;
    public $result;

    public function __construct($width, $high){
       $this -> width = $width;
       $this -> high = $high;
    }
  
    abstract public function calculateArea();
}

class Triangle extends Shape{

    public function calculateArea(){
       $this -> result = ($this -> width * $this -> high) / 2;
       return $this -> result. " cm2 <br>";
    } 
}

class Rectangle extends Shape{
    
    public function calculateArea(){
       $this -> result = $this -> width * $this -> high;
       return $this -> result. " cm2 <br>";
    } 
}

class Circle extends Shape{
    public $radio;
    public $pi = 3.14159;

    public function __construct($radio){
    $this -> radio = $radio;
    }
   
    public function calculateArea(){
        $this -> result = $this -> pi * ($this -> radio * $this -> radio) ;
        return $this -> result. " cm2 <br>";
    }
}
$triangle = new Triangle(10, 10);
echo $triangle -> calculateArea();

$rectangle = new Rectangle(5, 5);
echo $rectangle -> calculateArea();

$circle = new Circle(5);
echo $circle -> calculateArea();
?>