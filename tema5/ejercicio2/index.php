<?php

/**
 * @author David Castilla Ortiz
 */

function factorial($num)
{

    if ($num <= 1) {
        return $num;
    } else {
        return factorial($num - 1) * $num;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <p>
        <?= $_GET["num"] ?> - <?= factorial($_GET["num"]) ?>
    </p>
    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
