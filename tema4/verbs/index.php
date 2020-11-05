<?php

/**
 * @author David Castilla Ortiz
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Verbos Irregulares</title>
    <style>
        div {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin-bottom: 8px;
        }

        .err {
            color: #e00;
            background: #e002;
            padding: 8px;
            border-radius: 8px;
            margin: 8px 0 0 0;
            width: max-content;
        }
    </style>
</head>

<body>

    <h1>Verbos Irregulares</h1>

    <form action="verbs.php" method="POST">
        <div>
            <label for="level">Nivel</label>
            <input type="number" name="level">
            <?php if ($_SESSION["errNivel"]) { ?>
                <span class="err"><?= $_SESSION["errNivel"] ?></span>
            <?php }  ?>
        </div>
        <div>
            <label for="num">Número de verbos</label>
            <input type="number" name="num">
            <?php if ($_SESSION["errNum"]) { ?>
                <span class="err"><?= $_SESSION["errNum"] ?></span>
            <?php }  ?>
        </div>
        <input type="submit" name="send" value="Enviar">

        <?php session_unset() ?>
    </form>
<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>

</body>

</html>
