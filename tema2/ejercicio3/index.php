<?php
/*
 * @author David Castilla Ortiz
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

    for ($x = 1; $x <= 10; $x++) {
        echo "<ul>";
        for ($y = 0; $y <= 10; $y++) {
            echo "<li>$x * $y = " . $x * $y . "</li>";
        }
        echo "</ul>";
    }

    ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
