<?php

/**
 * @author David Castilla Ortiz
 */

$trabajos = array(
    "Ejercicio 1" => "./ejercicio1",
    "Ejercicio 2" => "./ejercicio2",
    "Ejercicio 3" => "./ejercicio3",
    "Ejercicio 4" => "./ejercicio4",
    "Ejercicio 5" => "./ejercicio5",
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tema 4. Formularios</title>
</head>

<body>
    <?php foreach ($trabajos as $trabajo => $path) { ?>
        <li><a href="<?= $path ?>"><?= $trabajo ?></a></li>
    <?php } ?>
</body>

</html>
