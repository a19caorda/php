<?php

/**
 * @author David Castilla Ortiz
 */

setcookie("Cookie #1", $value = "Valor de la cookie #1", $expire = time() + 60);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>

    <?php print_r($_COOKIE); ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
