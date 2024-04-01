<?php
class MagicConstants{

    public function getFile(){
      return __FILE__;
    }

    public function getDir(){
      return __DIR__;
    }
}  
$file_name = new MagicConstants();
echo $file_name -> getFile(). "<br>";

$directory_file = new MagicConstants();
echo $directory_file -> getDir(). "<br>";
?>