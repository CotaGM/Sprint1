<?php

enum Material: String{

    case silla = "silla";
    case banco = "banco";
    case mesa = "mesa";
    case lampara = "lampara";

    public function getMaterial(): String{
        return match($this){
          self::silla => "madera",
          self::banco => "madera",
          self::mesa => "vidrio",
          self::lampara => "plastico"
        };
    }
}
?>