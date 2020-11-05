<?php
/*
 * @author David Castilla Ortiz
 */

$month = $_GET["mes"] ? $_GET["mes"] : date("n");
$year = $_GET["anyo"] ? $_GET["anyo"] : date("Y");
$diaActual = date("j");

$diaSemana = date("w", mktime(0, 0, 0, $month, 1, $year));
$ultimoDiaMes = date("d", (mktime(0, 0, 0, $month + 1, 1, $year) - 1));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>

<body>

    <h1>Ejercicio 5</h1>

    <form action="./index.php" method="GET">
        <select id="mes" name="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        <input type="number" name="anyo" value="<?= $year ?>">
        <button type="submit">Enviar</button>
    </form>

    <h2><?php
        switch ($month) {
            case 1:
                echo "Enero";
                break;
            case 2:
                echo "Febrero";
                break;
            case 3:
                echo "Marzo";
                break;
            case 4:
                echo "Abril";
                break;
            case 5:
                echo "Mayo";
                break;
            case 6:
                echo "Junio";
                break;
            case 7:
                echo "Julio";
                break;
            case 8:
                echo "Agosto";
                break;
            case 9:
                echo "Septiembre";
                break;
            case 10:
                echo "Octubre";
                break;
            case 11:
                echo "Noviembre";
                break;
            case 12:
                echo "Diciembre";
                break;
        }
        ?> - <?= $year ?></h2>
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
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>

</body>

</html>
