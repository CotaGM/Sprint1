<?php
session_start();
       $_SESSION["name"] = $_REQUEST["name"];
       $_SESSION["email"] = $_REQUEST["email"];
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
echo "Bienvenid@ ". $_SESSION["name"]. "!<br>";
?>

<a href="pagina3.php">Ir al area personal</a>
</body>
</html>