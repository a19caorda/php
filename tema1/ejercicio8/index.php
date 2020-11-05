<?php

$x = 8;
$y = 50;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <p>El mayor es
        <?php if ($x > $y) {
            echo $x;
        } else {
            echo $y;
        } ?> y el menor es
        <?php if ($x < $y) {
            echo $x;
        } else {
            echo $y;
        } ?>
    </p>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
