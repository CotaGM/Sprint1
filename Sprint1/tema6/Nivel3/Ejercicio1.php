<?php

enum Resource:string{
   case Functions = "Function";
   case Flexbox = "Flexbox";
   case Layout = "Layout";
   case DataBase = "Data Base";
   case Framework = "Framework";

   public function getTheme():string{
        return match ($this){
          Resource::Functions => "PHP",
          Resource::Flexbox => "CSS",
          Resource::Layout => "HTML",
          Resource::DataBase => "SQL",
          Resource::Framework => "Laravel",
        };
    }
   
   public function getUrl():string{
        return match ($this){
           Resource::Functions => "https://www.php.net/manual/es/indexes.functions.php",
           Resource::Flexbox => "https://the-echoplex.net/flexyboxes/",
           Resource::Layout => "https://www.espai.es/blog/2018/01/que-es-el-html-semantico/",
           Resource::DataBase => "https://www.youtube.com/watch?v=OuJerKzV5T0",
           Resource::Framework => "https://laravel.com/docs/11.x/releases",
        };
    }

   public function getTypeResurce():string{
        return match ($this){
           Resource::Functions => "Articulo web",
           Resource::Flexbox => "Articulo web",
           Resource::Layout => "Video",
           Resource::DataBase => "Video",
           Resource::Framework => "Articulo web",
        };
    }
}

$resource1 = Resource::from("Function");
$resource2 = Resource::Functions;
$resource3 = Resource::Flexbox;

var_dump($resource1);
echo "<br/>";
var_dump($resource2-> getTheme());
echo "<br/>";
var_dump($resource3 ->value);
echo "<br/>";
array_map(
   fn(Resource $resource4) => var_dump($resource4 -> getTypeResurce()),
   Resource::cases()
);
?>