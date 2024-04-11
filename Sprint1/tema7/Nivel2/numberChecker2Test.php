<?php
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
class NumberChecker2Test extends TestCase {




   //public function __construct(private int $number){}




   public static function additionProvider(): array {  
 
       return[
          [2, true],
          [2, true],
          [3, false],
          [-1, true],
          [-1, false],
       ];
   }
   #[DataProvider("additionProvider")]
   
   public function testIsEven($number){
       //retun $this->number%2 == 0;
       $number = new NumberChecker2($number);
       $this->assertTrue(true, $number->isEven());
       $this->assertFalse(false, $number->isEven());
   }


   public function testIsPositive($number){
       //return $this->number > 0;
       $number = new NumberChecker2($number);
       $this->assertTrue(true, $number->isEven());
       $this->assertFalse(false, $number->isEven());
   }    
}
?>
