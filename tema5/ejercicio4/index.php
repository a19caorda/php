<?php

/**
 * @author David Castilla Ortiz
 */

function sum($num)
{
    $nums = str_split($num);
    $result = 0;

    foreach ($nums as $num) {
        $result += $num;
    }

    return $result;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h2>La suma de los dígitos de <?= $_GET["num"] ?> es <?= sum($_GET["num"]) ?></h2>
    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
