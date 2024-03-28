<?php
/* Nota:
En el W3 school aparece un ejercicio similar usando interfaces, pero quise intentarlo con una clase abstracta, porque existe una propiedad que sería el tipo de animal".
De todas formas como aún no entiendo en que caso usar uno u otro, porque ambos retornan un resultado, también realizare el ejercicio usando interface.
*/

//Utilizando clase abstracta
abstract class Animal{

    public $name;

    public function __construct($name){
      $this -> name = $name;
    }
    abstract public function makeSound(); 
}
    
class Cat extends Animal{
   public function makeSound(){
     return "El ". $this -> name. " hace Miau<br>";
   }  
}

class Dog extends Animal{
    public function makeSound(){
     return "El ". $this -> name. " hace Guaf<br>";
    }
}

$cat = new Cat("gato");
echo $cat -> makeSound();

$dog = new Dog("perro");
echo $dog -> makeSound();

?>