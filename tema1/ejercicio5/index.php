<?php
/*
 * Author: David Castilla Ortiz
 * Fecha: 25/09/2020
 * */

$x = 8;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <p>Valor actual: <?= $x ?></p>
    <p>Suma 2. Valor ahora <?= $x += 2 ?></p>
    <p>Resta 4. Valor ahora <?= $x -= 4 ?></p>
    <p>Multiplica por 5. Valor ahora: <?= $x *= 5 ?></p>
    <p>Divide por 3. Valor ahora: <?= $x /= 3 ?></p>
    <p>Incrementa el valor en 1. Valor ahora: <?= ++$x ?></p>
    <p>Decrementa el valor en 1. Valor ahora: <?= $x-- ?></p>


    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
