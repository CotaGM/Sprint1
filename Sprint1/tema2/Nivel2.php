<?php
//Ejercicio 1
function costoLlamada($min){
  if ($min < 3 ){
    echo 10, " centimos";
  }  
  else{
    echo 10 + (($min - 3)* 5), " centimos";
  }
}
costoLlamada(10);
?>