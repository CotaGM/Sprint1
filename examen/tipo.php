<?php

enum Tipo: string{

case silla = "silla";
case mesa = "mesa";
case lampara = "lampara";

    public function getTipo(){
        return match ($this){
         self::silla => "madera",
         self::mesa => "vidrio",
         self::lampara => "metal"
        };
    }
}
?>