<?php
require_once 'tienda.php';
require_once 'mueble.php';
require_once 'tipo.php';

$producto1 = new Mueble("Barcelona", 40, 60, 50, 100, 5.5, TIPO::silla);
$producto2 = new Mueble("Madrid", 50, 50, 100, 200, 4.3, TIPO::mesa);
$producto3 = new Mueble("Malaga", 60, 40, 20, 60, 3, TIPO::lampara);
$producto4 = new Mueble("Valencia", 80, 80, 40, 150, 4.2, TIPO::silla);
$producto5 = new Mueble("Cadiz", 50, 20, 70, 300, 5, TIPO::mesa);


$tienda = new Tienda("Ikea");

//agregar objetos al array
$tienda -> inventario = [$producto1, $producto2, $producto3, $producto4, $producto5];

//llamar a las funciones
$tienda -> getMuebleMasBarato();

echo $tienda -> getMediaValoracion();

?>