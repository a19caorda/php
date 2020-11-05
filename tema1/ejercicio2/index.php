<?php
/*
 * Author: David Castilla Ortiz
 * Fecha: 25/09/2020
 * */


$radius = 25;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>

<body>

    <h1>Ejercicio radio de in círculo</h1>
    <p>En un círculo de radio: <?= $radius ?></p>
    <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="<?= $radius ?>" fill="red" stroke-width="3" stroke="black" />
        <line x1="50" y1="50" y2="<?= 50 - $radius ?>" x2="50" fill="red" stroke-width="3" stroke="black" />
    </svg>
    <p>Su perímetro es: <?= $radius * 2 * 3.14 ?> y su área es: <?= $radius ** 2 * 3.14 ?></p>


    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
