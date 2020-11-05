<?php
/*
 * @author David Castilla Ortiz
 */

$i = 0;
for ($j = 2; $j <= 2 * 3; $j += 2) {
    $i += $j;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?= $i ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
