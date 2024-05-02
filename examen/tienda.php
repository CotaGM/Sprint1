<?php
require_once 'mueble.php';

class Tienda{

public string $nombre;
public array $inventario;

    public function __construct($nombre){
      $this ->nombre = $nombre;
      $this -> inventario =[];  
    }

//metodos
//Producto mas barato
    public function getMuebleMasBarato(): void{
    $precioMin = 1000;
    $productoMasBarato = null;
    
      foreach($this -> inventario as $producto){
        if($producto -> precio < $precioMin){
           $precioMin = $producto ->precio;
           $productoMasBarato = $producto;
        }
      } 
    echo "El producto mas barato es ". $productoMasBarato -> nombre. " y tiene un coste de ". $productoMasBarato -> precio. "<br>";
    }
  
    public function getMediaValoracion(): void{
    $totalSumaValoracion = 0;
    $promedioValoracion = 0;
       foreach($this -> inventario as $producto){
       $totalSumaValoracion += $producto -> valoracion;
       }
    $promedioValoracion =  $totalSumaValoracion/count($this ->inventario);
    echo "El promedio de la valoracion es de ". $promedioValoracion. " estrellas";
    }
}
?>