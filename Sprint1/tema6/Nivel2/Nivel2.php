<?php
class MagicConstants{

  public function getFile(){
    return __FILE__;
  }

  public function getDir(){
    return __DIR__;
  }
   
  public function __toString(){
    return "La ruta del archivo de métodos mágicos es el siguiente: <br>". $this -> getFile();
  }
}  
/*$file_name = new MagicConstants();
echo $file_name -> getFile(). "<br>";

$directory_file = new MagicConstants();
echo $directory_file -> getDir(). "<br>";*/

$file_name = new MagicConstants();
echo $file_name;
?>