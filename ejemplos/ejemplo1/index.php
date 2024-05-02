<?php
require_once 'Mueble.php';
require_once 'Tienda.php';


//objetos de la clase mueble
$producto1 = new Mueble("Granada", "Silla", 70, 100, Material::silla);
$producto2 = new Mueble("Caceres", "Mesa", 250.90, 30, Material::mesa);
$producto3 = new Mueble("Barcelona", "Banco", 150, 50, Material::banco);
$producto4 = new Mueble("Valencia", "Lampara", 20, 200, Material::lampara);

//objeto de la clase tienda
$tienda =  new Tienda("IKEA");

//insertar objetos de la clase mueble
$tienda->inventario = [$producto1, $producto2, $producto3, $producto4];


//mostrar productos
$tienda -> getInventario(). "<br>";  

//mostrar producto por nombre
echo $tienda -> getObjeto("Barcelona"), "<br>";;

//obtener el precio de un objeto especifico
echo $tienda ->getPrecioObjeto("Granada"),"<br>";


//suma de todos los productos
echo $tienda -> getTotalInventario(),"<br>";


//retornar cantidad
echo $tienda -> getSumaImportes(), "<br>";


//precio max
$tienda -> getPrecioMax(). "<br>";


/*
//Funcion de precio min
echo $tienda -> getPrecioMin($inventario), "<br>";

//funcion de retornar el enum
$tienda -> obtenerMaterialInventario($inventario); 

//obtener material objeto
echo $tienda -> obtenerMaterialObjeto($inventario, Material::silla);*/
?>