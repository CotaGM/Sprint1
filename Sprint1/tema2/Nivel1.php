<?php
$num_int = 10;
$num_doub = 3.14;
$nombre = "Constanza";
$valor_bool = true;
define("constanza", 40);
$saludo = "Hello World!";
$curso = "Este es el curso de PHP";

//ejercicio 1
echo $num_int, "<br/>",
$num_doub, "<br/>",
$nombre, "<br/>",
$valor_bool. "<br/>";
echo "Mi nombre es ". $nombre. " y tengo ". constanza.  " años.". "<br/>";

//ejercicio 2
echo $saludo. "<br/>";
$saludo = strtoupper($saludo);
echo $saludo. "<br/>";
echo strlen($saludo). "<br/>";
echo strrev($saludo). "<br/>";
echo $saludo. " ". $curso. ".<br/>"
?>
