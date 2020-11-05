<?php
/*
 * Author: David Castilla Ortiz
 * Fecha: 25/09/2020
 * */

$name = "David Castilla Ortiz";
$age = 21;
$image = "./image.png"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>David Castilla Ortiz</title>
</head>

<body>

    <h1> Hola, soy <?= $name ?> </h1>
    <div>
        <p>Tengo <?= $age ?> años</p>
        <p>Aquí tienes una foto mía: </p>
        <img src="<?= $image ?>" width="500px" />
    </div>


    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
