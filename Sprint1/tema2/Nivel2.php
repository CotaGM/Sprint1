<?php
//Ejercicio 1
function calcularCostoLlamada($min){
  if ($min < 3 ){
    echo 10, " centimos", "<br/>";
  }  
  else{
    echo 10 + (($min - 3)* 5), " centimos", "<br/>";
  }
}
costoLlamada(10);

//Ejercicio 2
function chocolate($cantidad){
  return $cantidad * 1;
}

function chicle($cantidad){
   return $cantidad * 0.50;
}

function caramelos($cantidad){
    return $cantidad * 1.50;
}
echo chocolate(2) + chicle(1) + caramelos(1), "€";
?>