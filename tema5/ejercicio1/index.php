<?php

/**
 * @author David Castilla Ortiz
 */
$letters = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

function calculateDNILetter($num)
{
    $num = intval($num);
    if ($num) {
        global $letters;
        return $letters[$num % 23];
    }
}

?>
<!DOCTYPE html>
<html lang"en">

<head>
    <meta charset"UTF-8">
    <title>Ejercicio 1 - Funciones</title>
</head>

<body>
    <?php if (isset($_GET["dni"])) { ?>
        <p><?= $_GET["dni"] . calculateDNILetter($_GET["dni"]) ?></p>
    <?php } else { ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <input type="number" name="dni">
            <input type="submit" value="Enviar">
        </form>
    <?php } ?>
<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>
</body>

</html>
