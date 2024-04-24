<?php
//Ejercicio 1
class MagicConstants{

  public function getFile(){
    return __FILE__;
  }

  public function getDir(){
    return __DIR__; 
  }
 
  //Ejercicio 2
  public function __toString(){
    return "La ruta del archivo de métodos mágicos es el siguiente: <br>". $this -> getFile();
  }
}
//Ejercicio 1
$file_name = new MagicConstants();
echo $file_name -> getFile(). "<br>";
echo $file_name -> getDir(). "<br>";

//Ejercicio 2
echo $file_name -> __toString();
?>