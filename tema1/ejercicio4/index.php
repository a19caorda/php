<?php
/*
 * Author: David Castilla Ortiz
 * Fecha: 25/09/2020
 * */

$x = 8;
$y = 7;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <p><?= $x ?> + <?= $y ?> = <?= $x + $y ?></p>
    <p><?= $x ?> - <?= $y ?> = <?= $x - $y ?></p>
    <p><?= $x ?> * <?= $y ?> = <?= $x * $y ?></p>
    <p><?= $x ?> / <?= $y ?> = <?= $x / $y ?></p>
    <p><?= $x ?> % <?= $y ?> = <?= $x % $y ?></p>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
