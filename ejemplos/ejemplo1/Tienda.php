<?php
require_once 'Mueble.php';

class Tienda{

  public $nombre;
  public $inventario;

  public function __construct(string $nombre){
    $this->nombre = $nombre;
    $this->inventario = [];
  }

//inventario
  public function getInventario(){
    foreach ($this->inventario as $producto){
      echo "Nombre: " . $producto->nombre . "<br>";
      echo "Tipo: " . $producto->tipo . "<br>";
      echo "Precio: $" . $producto->precio . "<br>";
      echo "Cantidad: " . $producto->cantidad . "<br>";
      echo "<br>"; // Salto de línea entre productos
      }
    }
//obtener los datos de un objeto especifico 
  public function getObjeto(string $objeto):string|int|float{
    foreach ($this->inventario as $producto) {
      if ($objeto === $producto ->nombre){
      return "El producto ". $producto->nombre. " es una ". $producto->tipo. ", cuesta ". $producto->precio. "€". " y hay ". $producto ->cantidad. " unidades.";
      }
    }
  return "producto no encontrado";  
  }

//obtener el precio de un objeto
  public function getPrecioObjeto(string $objeto): string|float{
    foreach ($this->inventario as $producto) {
     if ($objeto === $producto ->nombre){
     return "El precio del producto es: ". $producto->precio;
    }
  }
return "producto no encontrado";  
}

//total de productos en el inventario
  public function getTotalInventario():int|string{
  $totalproductos = 0;
    foreach($this->inventario as $producto){
      $totalproductos += $producto -> cantidad;
    }
  return "El total del productos en el inventario es de: ". $totalproductos;
  }

//total de la suma de los importes del total de los producto
  public function getSumaImportes(): string|float{
  $total = 0;
    foreach($this-> inventario as $producto){
      $total += ($producto -> precio)* $producto ->cantidad;
    }
  return "El total de importes de todo el inventario es: ". $total;
  }

//objeto mas caro
  public function getPrecioMax(){
  $precioMax= 0;
  $objetoMasCaro = null;
    foreach($this->inventario as $producto){
      if( $producto ->precio > $precioMax){
        $precioMax = $producto -> precio; 
        $objetoMasCaro = $producto;
      }
    }
  echo "El producto mas caro es: ". $objetoMasCaro-> tipo. " ". $objetoMasCaro -> nombre. " y cuesta ". $objetoMasCaro ->precio. "€ <br>";
  } 
}

 /*
  function getPrecioMax($inventario){
    foreach($inventario as $producto){
    $precioMax[] = $producto -> precio;
    } 
  return max($precioMax);
  }

  function getPrecioMin($inventario){
    foreach ($inventario as $producto){
    $precioMin[] = $producto -> precio;
    }
  return min($precioMin);
  }

  function obtenerMaterialInventario($inventario){
    foreach($inventario as $producto){
    echo "Material del producto {$producto->nombre}: {$producto->material ->getMaterial()}<br>";
    }
  }

  function obtenerMaterialObjeto(array $inventario, Material $material){
    foreach($inventario as $producto){
      if ($material === $producto -> material){
      return "El producto tiene una materialidad de: " .$producto->material->getMaterial();
      }
    }
  return "producto no existente";
} 

*/


?>