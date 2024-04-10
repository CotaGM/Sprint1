<?php
//Exercice 1
class Employee{

    public $name;
    public $salary;

    public function initialize($name, $salary){
       $this -> name = $name;
       $this -> salary = $salary;
    }

    public function print(){
       if ($this -> salary > 6000){
          echo $this -> name, ", tu sueldo es mayor a 6000€, por lo tanto debes pagar impuestos. <br>";
        }else{
          echo $this -> name, ", tu sueldo es menor a 6000€, por lo tanto no debes pagar impuestos. <br>";
        }
    }
}
$employee1 = new Employee ();
$employee1 -> initialize ("Andrea", 4000);
$employee1 -> print();

//Exercice 2
class Shape{

    public $width;
    public $high;
    public $result;

    public function __construct($width, $high){
       $this -> width = $width;
       $this -> high = $high;
    }
 
    public function printResult(){
        echo $this -> result, " cm2 <br>";
    }
}

class Triangle extends Shape{

    public function calculateArea(){
       $this -> result = ($this -> width * $this -> high) / 2;
    } 
}

class Rectangle extends Shape{
    
    public function calculateArea(){
       $this -> result = ($this -> width * $this -> high);
    } 
}
$triangle1 = new Triangle(10, 10);
$triangle1 -> calculateArea();
$triangle1 -> printResult();

$rectangle1 = new Rectangle(5, 5);
$rectangle1 -> calculateArea();
$rectangle1 -> printResult();
?>