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
    foreach (range(1, 10) as $i) {
        echo $i . " ";
    }
    ?>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>
</body>

</html>
