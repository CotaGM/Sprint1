<?php


use PHPUnit\Framework\TestCase;
class NumberCheckerTest extends TestCase {


   //public function __construct(private int $number){}


   public function testIsEven(){
       //retun $this->number%2 == 0;


        //haciendo pruebas por cada función numero par e impar
       $number = new NumberChecker();
       
       $this->assertTrue(true, $number->isEven(3));


       $this->assertTrue(true, $number->isEven(6));


       $this->assertTrue(false, $number -> isEven(10));


       $this->assertTrue(false, $number -> isEven(13));


       $this->assertFalse(true, $number->isEven(3));


       $number = new NumberChecker();
       $this->assertFalse(true, $number->isEven(6));


       $number = new NumberChecker();
       $this->assertFalse(false, $number -> isEven(10));


       $number = new NumberChecker();
       $this->assertFalse(false, $number -> isEven(13));
   }


   public function testIsPositive(){
       //return $this->number > 0;


       //haciendo pruebas con numero positivos/ ceros y negativos por funcion
       $number = new NumberChecker();
       $this->assertTrue(true, $number->isEven(1));


       $this->assertTrue(true, $number->isEven(-1));


       $this->assertTrue(true, $number->isEven(0));


       $this->assertTrue(false, $number->isEven(1));


       $this->assertTrue(false, $number->isEven(-1));


       $this->assertTrue(false, $number->isEven(0));


       $this->assertFalse(true, $number->isEven(1));


       $this->assertFalse(true, $number->isEven(-1));


       $this->assertFalse(true, $number->isEven(0));


       $this->assertFalse(false, $number->isEven(1));


       $this->assertFalse(false, $number->isEven(-1));


       $this->assertFalse(false, $number->isEven(0));
   }
}
?>
