<?php

/**
 * @author David Castilla Ortiz
 */

session_start();

if (isset($_POST['send'])) {

    if (!isset($_SESSION['tareas'])) {
        $_SESSION['tareas'] = array();
    }

    array_push(
        $_SESSION['tareas'],
        array("fecha" => $vDate, "tarea" => $_POST['task'])
    );
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>

<body>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="date">
        <input type="text" name="task">
        <input type="submit" value="Enviar" name="send">
    </form>

    <?php if (isset($_SESSION['tareas'])) {
        foreach ($_SESSION['tareas'] as $tarea) { ?>
            <p><?= $tarea['fecha'] ?> - <?= $tarea['tarea'] ?></p>
    <?php }
    } ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
