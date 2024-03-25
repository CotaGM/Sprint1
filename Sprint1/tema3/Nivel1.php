<?php
//Exercise 1
$cadena_numeros  = array(1, 2, 3, 4, 5);
foreach($cadena_numeros as $elemento){
echo $elemento, "<br/>";
}
//Exercise 2
$X = array(10, 20, 30, 40, 50, 60);
echo count($X), "<br/>";

array_splice($X, 5, 1);

echo count($X), "<br/>";

//Exercise 3 for each
function characterDetection($words_array, $characterX) {
   foreach($words_array as $words);
       if (strpos($words, $characterX) == true){
         return "Caracter encontrado";
       }
       else{
         return "Caracter no encontrado";
       }
    }
$words_array = array("hola", "php");
echo characterDetection($words_array, "h"),"<br/>";

//Exercise 4 associative array
$data_student = [
"nombre" => "Constanza", 
"edad" => "40", 
"email" => "cotadiseno@gmail.com", 
"comida favorita" => "helado"
];
echo $data_student["nombre"];
?> 