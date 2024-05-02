<?php

//clase
//atributos y metodos (constructor, getters)

Class Plantas{

public $nombre;
public $florece;
public Tipo $tipo;
public $dias_brote;
public $dias_madurar;

public function __construct(String $nombre, bool $florece, Tipo $tipo, int $dias_brote, int $dias_madurar){
   $this -> nombre = $nombre;
   $this -> florece = $florece;
   $this -> tipo = $tipo;
   $this -> dias_brote = $dias_brote;
   $this -> dias_madurar = $dias_madurar;
}

public function getDias_brote(): int{
    return $this -> dias_brote;
}   

public function getTipo(): Tipo{
    return $this -> tipo;
}
}
//enum 

enum Tipo{
  case arbol;
  case arbusto;
  case herbasea;

  public function getTipo(): String{
    return match($this){
      self::arbol => "arbol",
      self::arbusto => "arbusto",
      self::herbasea=> "herbasea",
    };
}
}

//main
//objetos y funciones especificas

$planta1 = new Plantas("Palto", true, Tipo::arbol, 20, 40);
$planta2 = new Plantas("Manzano", false, Tipo::arbol, 50, 100);
$planta3 = new Plantas("Cipres", true, Tipo::arbusto, 30, 50);
$planta4 = new Plantas("Rosal", true, Tipo::arbusto, 40, 80);
$planta5 = new Plantas("Musa", true, Tipo::herbasea, 50, 50);
$planta6 = new Plantas("Stipa", true, Tipo::herbasea, 100, 200);

$tienda = array($planta1, $planta2, $planta3, $planta4, $planta5, $planta6);

function getBroteMax($tienda){
foreach ($tienda as $planta){
 $broteMax [] = $planta -> getDias_brote();
}
return max($broteMax);
}
echo getBroteMax($tienda), "<br>";

function getPlantaNombres($tienda){
    foreach($tienda as $planta){
    echo "Material del producto {$planta->nombre}: {$planta->tipo->getTipo()}<br>";
    }
}
getPlantaNombres($tienda); 

?>
