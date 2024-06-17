<?php
session_start();

// Guardar datos en sesiones
$_SESSION["name"] = $_REQUEST["name"];
$_SESSION["email"] = $_REQUEST["email"];

// Validación de nombre y email
$errorUserName = false;
$errorEmail = false;

if (strlen($_REQUEST["name"]) < 7 || strlen($_REQUEST["name"]) > 12) {
    echo "El usuario tiene que tener una longitud entre 7 y 12 caracteres <br>";
    $errorUserName = true;
}

if (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Email no válido.";
    $errorEmail = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 6</title>
</head>
<body>
<?php
if (!$errorUserName && !$errorEmail) {
    echo "Bienvenid@ ". htmlspecialchars($_SESSION["name"]). "!<br>";
?>    
<a href="pagina3.php">Ir al area personal</a>
<?php } ?>
</body>
</html>