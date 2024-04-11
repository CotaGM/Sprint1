<?php
//Ejercicio 5
Class Grado{

public function __construct(){}

public function grado($nota){
   if( $nota >= 60) {
    return "Primera division";
   }
   else if($nota >= 45){
     return "Segunda division";
   }
   else if($nota >= 33){
     return "Tercera division";
   }
   else{
     return "El estudiante reprobará";
   }
 }
}
?>
