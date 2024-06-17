<?php

    if (strlen($_GET["name"]) <7  || strlen($_GET["name"]) >12){
      echo "El usuario tiene que tener una longitud entre 7 y 12 caracteres <br>";
      $errorUserName = true;
    }
    if (!filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
      echo "Email no válido.";
      $errorEmail = true;
    }
    if(!$errorUserName && !$errorEmail) {
      echo "Bienvenida ". $_GET["name"]. " has iniciado sesion con el email ". $_GET["email"];
    }
?>