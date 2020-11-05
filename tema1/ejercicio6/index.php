<?php
/*
 * Author: David Castilla Ortiz
 * Fecha: 25/09/2020
 * */

$name = "Harry";
$numero = 28;
$null = NULL;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <p><?= gettype($name) ?>(<?= strlen($name) ?>) "<?= $name ?>"</p>
    <p><?= $name ?></p>
    <p><?= gettype($numero) ?>(<?= $numero ?>)</p>
    <p><?= gettype($null) ?></p>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
