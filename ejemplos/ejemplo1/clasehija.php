<?php

class Silla extends Mueble{

    public $radio;

    public function __construct(string $nombre, Tipo $tipo, float $precio, int $cantidad, int $radio){
        parent::__construct($nombre, $tipo, $precio, $cantidad);
        $this -> radio = $radio;
        }

        public function getRadio(): int{
            return $this -> tipo;
        }
    

    
}
?>