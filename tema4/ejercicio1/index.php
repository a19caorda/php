<?php
/*
 * @author David Castilla Ortiz
 */

$month = $_GET["mes"] ? $_GET["mes"] : date("n");
$year = $_GET["anyo"] ? $_GET["anyo"] : date("Y");
$diaActual = date("j");

$diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year));
$ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

$meses = array(
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
);

$festivos = array(
    array()
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>

    <h1>Ejercicio 1</h1>

    <form action="./index.php" method="GET">
        <select id="mes" name="mes">
            <?php foreach ($meses as $idx => $mes) { ?>
                <option value="<?= $idx ?>" <?php if ($idx + 1 == $month) { echo "selected"; } ?>><?= $mes ?></option>
            <?php } ?>
        </select>
        <input type="number" name="anyo" value="<?= $year ?>">
        <button type="submit">Enviar</button>
    </form>

    <h2><?= $meses[$month - 1] ?> - <?= $year ?></h2>
    <table>

        <tr>
            <th>L</td>
            <th>M</td>
            <th>X</td>
            <th>J</td>
            <th>V</td>
            <th>S</td>
            <th>D</td>
        </tr>

        <tr><?php

            for ($i = 1; $i <= 42; $i++) {
                if ($dia > $ultimoDiaMes) {
                    break;
                }

                if ($diaSemana == $i) {
                    $dia = 1;
                }
                if (!$dia) {
                    echo "<td></td>";
                    continue;
                }
                echo "<td>$dia</td> ";
                if ($i % 7 == 0) {
                    echo "</tr><tr>";
                }
                $dia++;
            }

            ?>
        </tr>
    </table>

    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>

</body>

</html>
