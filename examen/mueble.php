<?php

require_once 'tipo.php';

class Mueble{

public string $nombre;
public float $alto;
public float $ancho;
public float $largo;
public float $precio;
public float $valoracion;
public TIPO $tipo;


    public function __construct(string $nombre, float $alto, float $ancho, float $largo, float $precio, float $valoracion, TIPO $tipo){
    
      $this -> nombre = $nombre;
      $this -> alto = $alto;
      $this -> ancho = $ancho;
      $this -> largo = $largo;
      $this -> precio = $precio;
      $this -> valoracion = $valoracion;
      $this -> tipo = $tipo;
    }
}
?>