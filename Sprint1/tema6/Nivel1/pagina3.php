<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo $_SESSION["name"]. "<br>". $_SESSION["email"]. "<br>";
?>

</body>
</html>
