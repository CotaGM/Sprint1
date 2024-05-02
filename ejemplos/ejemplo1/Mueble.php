<?php

require_once 'enum.php';


class Mueble{

public $nombre;
public $tipo;
public $precio;
public $cantidad;
public Material $material;


    public function __construct(string $nombre, string $tipo, float $precio, int $cantidad, Material $material){
       $this -> nombre = $nombre;
       $this -> tipo = $tipo;
       $this -> precio = $precio;
       $this -> cantidad = $cantidad;
       $this -> material = $material;
    }
}
/*
    public function getNombre(): String{
        return $this -> nombre;
    }

    public function getPrecio(): float{
        return $this -> precio;
    }

    public function getCantidad(): int{
        return $this -> cantidad;
    }

    
    public function getTipo(): String{
        return $this -> tipo;
    }
    
*/

?>