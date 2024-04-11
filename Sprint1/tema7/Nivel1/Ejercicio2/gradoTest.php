<?php
//Ejercicio 5
use PHPUnit\Framework\TestCase;
class GradoTest extends TestCase {

  public function testGrado(){
   /*if($nota >= 60) {
     echo "Primera división", "<br/>";
   }
   else if($nota >= 45){
     echo "Segunda división", "<br/>";
   }
   else if($nota >= 33){
     echo "Tercera division", "<br/>";
   }
   else{
     echo "El estudiante reprobará";
   }*/

   $number = new Grado();
   $this->assertEquals("El estudiante reprobará", $number->grado(31));


   $this->assertEquals("Tercera division", $number->grado(34));


   $this->assertEquals("Segunda division", $number->grado(45));


   $this->assertEquals("Primera division", $number->grado(60));
 }
}
?>
