<?php
//Variables y constantes
$num_int = 10;
$num_doub = 3.14;
$nombre = "Constanza";
$valor_bool = true;
define("constanza", 40);
$saludo = "Hello World!";
$curso = "Este es el curso de PHP";
$x = 10;
$y = 5;
$n = 56.7;
$m = 9.6;


//ejercicio 1
echo $num_int. "<br/>".
$num_doub. "<br/>".
$nombre. "<br/>".
$valor_bool, "<br/>";
echo "Mi nombre es ". $nombre. " y tengo ". constanza.  " años". "<br/>";


//ejercicio 2
echo $saludo, "<br/>";
$saludo = strtoupper($saludo);
echo $saludo. "<br/>";
echo strlen($saludo). "<br/>";
echo strrev($saludo). "<br/>";
echo $saludo. " ". $curso. "<br/>";


//Ejercicio 3
echo $x. "<br/>".
$y. "<br/>";


echo $x, " + ", $y, " = ", $x + $y, "<br/>",
$x, " - ", $y, " = ", $x - $y, "<br/>",
$x, " * ", $y, " = ", $x * $y, "<br/>",
$x, " % ", $y, " = ", $x % $y, "<br/>";


echo $n, " + ", $m, " = ", $n + $m, "<br/>",
$n, " - ", $m, " = ", $n - $m, "<br/>",
$n, " * ", $m, " = ", $n * $m, "<br/>",
$n, " % ", $m, " = ", $n % $m, "<br/>";


echo $x, " * 2 = ", $x * 2, "<br/>",
$y, " * 2 = ", $y * 2, "<br/>",
$n, " * 2 = ", $n * 2, "<br/>",
$m, " * 2 = ", $m * 2, "<br/>";


echo $x, " + ", $y, " + ", $n, " + ", $m, " = ", $x + $y + $n + $m, "<br/>";
echo $x, " * ", $y, " * ", $n, " * ", $m, " = ", $x * $y * $n * $m, "<br/>";


function calculadora($a , $b, $operacion): float {
  switch($operacion){
         case "+":
            $resultado = $a + $b;
            break;
         case "-":
            $resultado = $a - $b;
            break;
         case "*":
            $resultado = $a * $b;
            break;
         case "/":
            $resultado = $a / $b;
            break;            
  }
  return $resultado;
}
echo calculadora(2.5, 3, "*"), "<br/>";

//Ejercicio 4
function contador($a = 10, $b = 1){
   for($i = 1; $i <= $a; $i += $b){  
     echo $i, "<br/>";
   }
}
contador(10, 3);

//Ejercicio 5
function grado($nota){
    if($nota >= 60) {
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
    }
  }
  grado(48);
  //Ejercicio 6
 function isBitten(){
    if (rand(1, 10) > 5) {
     echo "Charlie me mordió el dedo";  
    }
    else{
     echo "Charlie no me ha mordido";
  }
 }
 isBitten();
?>