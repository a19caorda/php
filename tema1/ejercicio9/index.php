<?php

$mes = intval(date("m"));
$dias = 0;

switch ($mes) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $dias = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $dias = 30;
        break;
    case 2:
        $anyo = intval(date("Y"));
        $dias = $anyo % 400 == 0 || $anyo % 100 != 0 && $anyo % 4 == 0 ? 29 : 28;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    El mes <?= $mes ?> tiene <?= $dias ?> dias.

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>

</body>

</html>
