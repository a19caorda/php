<?php

/**
 * @author David Castilla Ortiz
 */
include_once("buscaminas.php");

session_start();
if (isset($_POST['reset'])) {
    session_unset();
} else {
    foreach ($_POST as $idxs => $_) {
        if ($idxs == "flags")
            continue;
        $idxs_splitted = explode("-", $idxs);
        $y = intval($idxs_splitted[0]);
        $x = intval($idxs_splitted[1]);

        handleClick($y, $x, isset($_POST['flags']));
    }
}

if (!isset($_SESSION['buscaminas_tablero'])) {
    colocarMinas();
}

if (!isset($_SESSION['buscaminas_jugador'])) {
    crearArrayJugador();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BUSCAMINAS</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>

    <form method="POST" action="<?= $_SERVER["PHP_SELF"] ?>">
        <input type="submit" value="<?php if ($_SESSION['finished']) echo "Nueva partida";
                                    else echo "Reiniciar"; ?>" name="reset" id="reset">
        <div>
            <input type="checkbox" name="flags" id="flags" <?php if (isset($_POST['flags'])) echo "checked"; ?>>
            <label for="flags">Alternar banderas</label>
        </div>

        <table>
            <?php foreach ($_SESSION['buscaminas_jugador'] as $y =>  $tabla) { ?>
                <tr>
                    <?php foreach ($tabla as $x => $val) { ?>
                        <td>
                            <?php if ($val === 'f') { ?>
                                <input type="submit" value="<?php if ($_SESSION["win"]) echo '🏆';
                                                            else echo '🚩'; ?>" name="<?= $y . "-" . $x ?>">
                            <?php } else if ($val) { ?>
                                <?php if ($_SESSION["buscaminas_tablero"][$y][$x] == 9) { ?>
                                    <input type="submit" value="💥" disabled>
                                <?php } else { ?>
                                    <input disabled type="submit" value="<?= $_SESSION['buscaminas_tablero'][$y][$x] ?>">
                                <?php } ?>
                            <?php } else { ?>
                                <input type="submit" value="" name="<?= $y . "-" . $x ?>">
                            <?php } ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </form>

</body>

</html>
