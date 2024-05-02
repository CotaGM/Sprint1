<?php

/*$vehicles =
[
    [ "Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg" ],
    [ "Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg" ],
    [ "Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg" ]
];*/

class Vehicle{
    public $make;
    public $model;
    public $year;
    public $milage;
    public $price;
    public $image; 
    
    function __construct($make, $model, $year, $milage, $price, $image){
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
        $this -> milage = $milage;
        $this -> price = $price;
        $this -> image = $image;
    }
}
class Truck extends Vehicle{

    public $engine;

    function __construct($make, $model, $year, $milage, $price, $image, $engine){
        Vehicle::__construct($make, $model, $year, $milage, $price, $image);
        $this -> engine = $engine;
    }
}

//Ejemplo de clase abstracta

abstract class Vehicle{
    
    public $make;
    public $model;
    public $year;
    public $milage;
    public $price;
    public $image; 
    
}
class Car extends Vehicle{

    function __construct($make, $model, $year, $milage, $price, $image, $ingine){
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
        $this -> milage = $milage;
        $this -> price = $price;
        $this -> image = $image;
    }
}

class Truck extends Vehicle{

    public $engine;

    function __construct($make, $model, $year, $milage, $price, $image, $ingine){
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
        $this -> milage = $milage;
        $this -> price = $price;
        $this -> image = $image;
        $this -> engine = $engine;
    }
}




/* 

$vehicle1 = new Vehicle();

$vehicle1 -> make = "Astro";
$vehicle1 -> model = "Estrella";
$vehicle1 -> year = "2021";
$vehicle1 -> mileage = 500;
$vehicle1 -> price = 50000;
$vehicle1 -> image = "veh-01.jpg";

$vehicle2 = new Vehicle();

$vehicle2 -> make = "Terraza";
$vehicle2 -> model = "Spinneo";
$vehicle2 -> year = "2020";
$vehicle2 -> mileage = 30000;
$vehicle2 -> price = 31000;
$vehicle2 -> image = "veh-02.jpg";

$vehicle3 = new Vehicle();

$vehicle3 -> make = "Sage";
$vehicle3 -> model = "Ecostar";
$vehicle3 -> year = "2014";
$vehicle3 -> mileage = 70000;
$vehicle3 -> price = 15000;
$vehicle3 -> image = "veh-03.jpg";*/

$vehicle1 = new Vehicle("Astro", "Estrella", 2021, 500, 50000, "veh-01.jpg");
$vehicle2 = new Vehicle("Terraza", "Spinneo", 2020, 30000, 31000, "veh-02.jpg");
$vehicle3 = new Vehicle("Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg");

?>