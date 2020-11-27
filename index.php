<?php

/**
 * @Author David Castilla Ortiz
 */

$temas = array(
    "Tema 1 Básicos y condicionales PHP" => array(
        "Ejercicio 1"  => "/tema1/ejercicio1",
        "Ejercicio 2"  => "/tema1/ejercicio2",
        "Ejercicio 3"  => "/tema1/ejercicio3",
        "Ejercicio 4"  => "/tema1/ejercicio4",
        "Ejercicio 5"  => "/tema1/ejercicio5",
        "Ejercicio 6"  => "/tema1/ejercicio6",
        "Ejercicio 7"  => "/tema1/ejercicio7",
        "Ejercicio 8"  => "/tema1/ejercicio8",
        "Ejercicio 9"  => "/tema1/ejercicio9",
    ),
    "Tema 2 Bucles" => array(
        "Ejercicio 1"  => "/tema2/ejercicio1",
        "Ejercicio 2"  => "/tema2/ejercicio2",
        "Ejercicio 3"  => "/tema2/ejercicio3",
        "Ejercicio 4"  => "/tema2/ejercicio4",
        "Ejercicio 5"  => "/tema2/ejercicio5",
    ),
    "Tema 3 Array" => array(
        "Comunidades" => "/tema3/comunidades.php"
    ),
    "Tema 4 Formularios" => array(
        "Verbos Irregulares" => "/tema4/verbs",
        "Ejercicio 1"        => "/tema4/ejercicio1",
        //"Ejercicio 2" => "/ejercicio2",
        //"Ejercicio 3" => "/ejercicio3",
        //"Ejercicio 4" => "/ejercicio4"
    ),
    "Tema 5 Funciones" => array(
        "Ejercicio 1" => "/tema5/ejercicio1",
        "Ejercicio 2" => "/tema5/ejercicio2",
        "Ejercicio 3" => "/tema5/ejercicio3",
        "Ejercicio 4" => "/tema5/ejercicio4",
        "Ejercicio 5" => "/tema5/ejercicio5",
    ),
    "Tema 6 Cookies y Sesiones" => array(
        "Ejercicio 1" => "/tema6/ejercicio1",
        "Ejercicio 2" => "/tema6/ejercicio2",
        "Ejercicio 3" => "/tema6/ejercicio3",
        "Ejercicio 4" => "/tema6/ejercicio4",
        "Ejercicio 5" => "/tema6/ejercicio5",
        "Buscaminas" => "/tema6/buscaminas",
    ),
    "Tema 7. Ficheros" => array(
        "Genereación de usuarios" => "/tema7/scriptUsuarios"
    ),
    "Portfolio de prueba" => "/portfolio-prueba",
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>David Castilla Ortiz</title>

    <style>
        body {
            margin: 0 10%;
        }

        main {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        h1,
        h2,
        li {
            text-align: center;
            list-style: none;
        }
    </style>
</head>

<body>

    <header>
        <h1>Hola! Soy David Castilla</h1>
    </header>
    <main>
        <?php foreach (array_reverse($temas) as $title => $ejercicios) { ?>
            <section>
                <?php if (is_array($ejercicios)) { ?>
                    <h2><?= $title ?></h2>
                    <ul>
                        <?php foreach ($ejercicios as $title => $ejercicio) { ?>
                            <li><a href="<?= $ejercicio ?>"><?= $title ?></a> (<a href="<?= "https://github.com/a19caorda/php/blob/master" . $ejercicio ?>">Github</a>)
                            <?php } ?>
                    </ul>
                <?php } else { ?>
                    <h2><a href="<?= $ejercicios ?>"><?= $title ?></a></h2>
                <?php } ?>
            </section>
        <?php } ?>
    </main>
</body>

</html>
