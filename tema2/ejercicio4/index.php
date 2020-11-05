<?php
/*
 * @author David Castilla Ortiz
 */

$step = 15;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        div {
            height: 50px;
            width: 50px;
            display: inline-block;
        }
    </style>
    <title></title>
</head>

<body>
    <?php

    for ($red = 0; $red <= 255; $red += $step) {
        for ($green = 0; $green <= 255; $green += $step) {
            for ($blue = 0; $blue <= 255; $blue += $step) {
                echo "<div style=\"background-color: rgb($red, $green, $blue)\"></div>";
            }
            echo "<br/>";
        }
    }

    ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
