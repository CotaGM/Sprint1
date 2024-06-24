<?php
//Ejercicio 5
use PHPUnit\Framework\TestCase;
class GradoTest extends TestCase {

  public function testStudentSuspended(){ 
  $number = new Grado();
  $this->assertEquals("El estudiante reprobará", $number->grado(31));
  }

  public function testStudentThirdDivision(){
  $number = new Grado();
  $this->assertEquals("Tercera division", $number->grado(34));
  }

  public function testStudentSecondDivision(){
  $number = new Grado();
  $this->assertEquals("Segunda division", $number->grado(45));
  }

  public function testStudentFirstDivision(){
  $number = new Grado();
  $this->assertEquals("Primera division", $number->grado(60));
  }

}
?>
