<?php

/**
 * @author David Castilla Ortiz
 *
 */

function ponerDistancias(&$tablero, $y, $x)
{
    //for ($i = $y - 1; $i <= $y + 1; $i++) {
    //    for ($j = $x - 1; $j <= $x + 1; $j++) {
    //        if ($tablero[$i][$j] != 9) {
    //            $tablero[$i][$j]++;
    //        }
    //    }
    //}
    for ($i = max(0, $y - 1); $i <= min($y + 1, 15); $i++) {
        for ($j = max(0, $x - 1); $j <= min($x + 1, 15); $j++) {
            if ($tablero[$i][$j] == 9) {
                continue;
            }
            $tablero[$i][$j] += 1;
        }
    }
}

function crearArrayJugador()
{

    $tablero = array();

    for ($i = 0; $i < 16; $i++) {
        $tablero[$i] = array();
        for ($j = 0; $j < 16; $j++) {
            $tablero[$i][$j] = false;
        }
    }

    $_SESSION['buscaminas_jugador'] = $tablero;
}

function colocarMinas()
{

    $tablero = array();

    for ($i = 0; $i < 16; $i++) {
        $tablero[$i] = array();
        for ($j = 0; $j < 16; $j++) {
            if (rand(-9, 9) == 9) {
                $tablero[$i][$j] = 9;
            }
        }
    }
    for ($i = 0; $i < 16; $i++) {
        for ($j = 0; $j < 16; $j++) {
            if ($tablero[$i][$j] == 9) {
                ponerDistancias($tablero, $i, $j);
            }
        }
    }

    $_SESSION['buscaminas_tablero'] = $tablero;
}

function handleClick($y, $x, $flags = false)
{
    if (!$_SESSION['finished']) {
        $jugadorCell = $_SESSION['buscaminas_jugador'][$y][$x];
        if ($flags) {
            $_SESSION['buscaminas_jugador'][$y][$x] = $jugadorCell ==  'f' ? '' : 'f';
        } else {
            $celda = $_SESSION['buscaminas_tablero'][$y][$x];
            if ($celda == 9) {
                handleDeath($y, $x);
            } else {
                $_SESSION['buscaminas_jugador'][$y][$x] = true;
                if ($celda == 0) {
                    for ($i = max(0, $y - 1); $i <= min($y + 1, 15); $i++) {
                        for ($j = max(0, $x - 1); $j <= min($x + 1, 15); $j++) {
                            if (!$_SESSION['buscaminas_jugador'][$i][$j])
                                handleClick($i, $j);
                        }
                    }
                }
            }
        }
        if (isVictory()) {
            $_SESSION["finished"] = true;
            $_SESSION["win"] = true;
        }
    }
}

function handleDeath($y, $x)
{
    $_SESSION['buscaminas_jugador'][$y][$x] = true;

    foreach ($_SESSION['buscaminas_tablero'] as $y => $row) {
        foreach ($row as $x => $val) {
            if ($val == 9) {
                $_SESSION['buscaminas_jugador'][$y][$x] = true;
            }
        }
    }

    $_SESSION['finished'] = true;
}

function isVictory()
{
    foreach ($_SESSION['buscaminas_tablero'] as $y => $row) {
        foreach ($row as $x => $val) {
            $jugadorCell = $_SESSION["buscaminas_jugador"][$y][$x];
            if ($val === 'f' && $jugadorCell != 9) {
                return false;
            } else if (!$jugadorCell) {
                return false;
            }
        }
    }
    return true;
}
