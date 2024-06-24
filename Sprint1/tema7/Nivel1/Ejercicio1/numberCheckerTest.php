<?php


use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase {


   //public function __construct(private int $number){}


   public function testIsEven(){
       //retun $this->number%2 == 0;

        //haciendo pruebas por cada función numero par e impar
       $number = new NumberChecker();
       $this->assertTrue(true, $number->isEven(3));

       $this->assertNotTrue(true, $number->isEven(6));
    }

    public function testIsPositive(){
       //return $this->number > 0;


       //haciendo pruebas con numero positivos/ ceros y negativos por funcion
       $number = new NumberChecker();

       $this->assertTrue(true, $number->isPositive(1));

       $this->assertNotTrue(true, $number->isPositive(-1));
   }
}
?>
