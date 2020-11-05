<?php
/*
 * @author David Castilla Ortiz
 */

$comunidades = array(
    array("comunidad" => "Andalucía",            "provincias" => array(array("Almería", 8), array("Cádiz", 8), array("Córdoba", 8), array("Granada", 8), array("Huelva", 8), array("Jaén", 8), array("Málaga", 136), array("Sevilla", 264))),
    array("comunidad" => "Aragón",               "provincias" => array(array("Huesca", 8), array("Teruel", 8), array("Zaragoza", 8))),
    array("comunidad" => "Asturias",             "provincias" => array(array("Oviedo", 8))),
    array("comunidad" => "Baleares",             "provincias" => array(array("Palma de Mallorca", 8))),
    array("comunidad" => "Canarias",             "provincias" => array(array("Santa Cruz de Tenerife", 8), array("Las Palmas de Gran Canaria", 8))),
    array("comunidad" => "Cantabria",            "provincias" => array(array("Santander", 8))),
    array("comunidad" => "Castilla-La Mancha",   "provincias" => array(array("Albacete", 8), array("Ciudad Real", 8), array("Cuenca", 8), array("Guadalajara", 8), array("Toledo", 8))),
    array("comunidad" => "Castilla y León",      "provincias" => array(array("Ávila", 8), array("Burgos", 8), array("León", 8), array("Salamanca", 8), array("Segovia", 8), array("Soria", 8), array("Valladolid", 8), array("Zamora", 8))),
    array("comunidad" => "Cataluña",             "provincias" => array(array("Barcelona", 8), array("Gerona", 8), array("Lérida", 8), array("Tarragona", 8))),
    array("comunidad" => "Comunidad Valenciana", "provincias" => array(array("Alicante", 8), array("Castellón de la Plana", 8), array("Valencia", 8))),
    array("comunidad" => "Extremadura",          "provincias" => array(array("Badajoz"), array("Cáceres", 8))),
    array("comunidad" => "Galicia",              "provincias" => array(array("La Coruña", 8), array("Lugo", 8), array("Orense", 8), array("Pontevedra", 8))),
    array("comunidad" => "Madrid",               "provincias" => array(array("Madrid", 558))),
    array("comunidad" => "Murcia",               "provincias" => array(array("Madrid", 8))),
    array("comunidad" => "Navarra",              "provincias" => array(array("Pamplona", 8))),
    array("comunidad" => "País Vasco",           "provincias" => array(array("Bilbao", 8), array("San Sebastián", 8), array("Vitoria", 8))),
    array("comunidad" => "La Rioja",             "provincias" => array(array("Logroño", 8))),
)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>

    <style>
        .warn {
            color: red;
        }
    </style>

</head>

<body>

    <?php
    foreach ($comunidades as $comunidad) {

        $suma = 0;
        foreach ($comunidad["provincias"] as $provincia) {
            $suma += $provincia[1];
        }

    ?>
        <h2 class="<?php if ($suma > 500) echo "warn"; ?>"><?= $comunidad["comunidad"] ?> - <?= $suma ?></h2>
        <ul>
            <?php
            $provincias = $comunidad["provincias"];
            foreach ($provincias as $provincia) { ?>
                <li><?= $provincia[0] ?> - <?= $provincia[1] ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
