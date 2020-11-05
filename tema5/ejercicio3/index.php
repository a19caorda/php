<?php

/** @author David Castilla Ortiz
 */
function normaliza($cadena)
{
    $originales = 'ÁÉÍÓÚáéíóú';
    $modificadas = 'AEIOUaeiou';
    $cadena = utf8_decode($cadena);
    $cadena =
        strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return utf8_encode($cadena);
}

$aUsuarios = array(array('nombre' => 'Jesús', 'apellido1' => 'Martínez', 'apellido2' => 'García'), array('nombre' =>
'Mercedes', 'apellido1' => 'Calamaro', 'apellido2' => 'Pedrajas'), array(
    'nombre' => 'Elena', 'apellido1' => 'Pérez',
    'apellido2' => ''
),);

$nombresDeUsuario = array_map(function ($val) {
    return substr(normaliza($val["apellido1"]), 0, 2) .
        substr(normaliza($val["apellido2"]), 0, 2) . normaliza($val["nombre"])[0];
}, $aUsuarios);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <h1>Los nombres de usuario son:</h1>
    <ul>
        <?php foreach ($aUsuarios as $idx => $user) { ?>
            <li>Para <?= $user["nombre"] ?>
                <?= $user["apellido1"] ?> <?= $user["apellido2"] ?> es <?= $nombresDeUsuario[$idx] ?>
            </li>
        <?php } ?>
    </ul>
<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>

</body>

</html>
