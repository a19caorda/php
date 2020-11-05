<?php

/**
 * @author David Castilla Ortiz
 */

session_start();

$nivel = $num = 0;
$errNivel = $errNum = "";

$verbs = array(
    array("Ser", "Be",     "Was/Were", "Been"),
    array("Golpear", "Beat",   "Beat",     "Beaten"),
    array("Morder", "Bite",   "Bit",      "Bitten"),
    array("Soplar", "Blow",   "Blew",     "Blown"),
    array("Convertirse en", "Become", "Became",   "Become"),
    array("Comenzar", "Begin",  "Began",    "Begun"),
    array("Romper", "Break",  "Broke",    "Broken"),
    array("Traer", "Bring",  "Brought",  "Brought"),
    array("Construir", "Build",  "Built",    "Built"),
    array("Comprar", "Buy",    "Bought",   "Bought"),
    array("Coger", "Catch",  "Cought",   "Cought"),
    array("Elegir", "Choose", "Chose",    "Chosen"),
    array("Venir", "Come",   "Came",     "Came"),
    array("Costar", "Cost",   "Cost",     "Cost"),
    array("Cortar", "Cut",    "Cut",      "Cut"),
    array("Hacer", "Do",     "Did",      "Done"),
    array("Dibujar", "Draw",   "Drew",     "Drawn"),
    array("Soñar", "Dream",  "Dreamt",   "Dreamt"),
    array("Beber", "Drink",  "Drank",    "Drunk"),
    array("Comer", "Eat",    "Ate",      "Eaten"),
    array("Caer", "Fall",   "Fell",     "Fallen"),
    array("Alimentar", "Feed",   "Fed",      "Fed"),
    array("Pelear", "Fight",  "Fought",   "Fought"),
    array("Olvidar", "Forget", "Forgot",   "Forgotten"),
    array("Obtener", "Get",    "Got",      "Got"),
    array("Ir", "Go",     "Went",     "Gone"),
    array("Tener", "Have",   "Had",      "Had"),
    array("Esconder", "Hide",   "Hid",      "Hidden"),
    array("Saber", "Know",   "Knew",     "Known"),
    array("Perder", "Lose",   "Lost",     "Lost"),
    array("Fabricar", "Make",   "Made",     "Made"),
    array("Pagar", "Pay",    "Paid",     "Paid"),
    array("Leer", "Read",   "Read",     "Read"),
    array("Decir", "Say",    "Said",     "Said")
);

if (isset($_POST["send"])) {
    $toAsk = array();
    $nivel = intval($_POST["level"]);
    if (!($nivel >= 1 && $nivel <= 3)) {
        $errNivel = "El nivel debe estar entre 1 y 3";
        $_SESSION["errNivel"] = $errNivel;
    }

    $num = intval($_POST["num"]);
    if (!($num >= 1 && $num <= 30)) {
        $errNum = "El número de verbos debe estar entre 1 y 30";
        $_SESSION["errNum"] = $errNum;
    }

    if ($errNivel !== "" || $errNum !== "") {
        Header("Location: /tema4/verbs/index.php");
        return;
    }
    session_destroy();

    while (count($toAsk) < $num) {
        $key = rand(0, count($verbs));
        $verb = $verbs[$key];

        for ($i = 0; $i < $nivel; $i++) {
            $toRemove = rand(0, 3);
            $verb[$toRemove] = "";
        }

        $toAsk[$key] = $verb;
    }
} else if (isset($_POST["sendTest"])) {
    $verbsAnswers = array_keys($_POST);
    $verbOk = array();

    foreach ($verbsAnswers as $verbConjIndex) {
        if ($verbConjIndex == "sendTest") {
            continue;
        }
        $verbConjIndexEx = explode("-", $verbConjIndex);
        $verbIndex = intval($verbConjIndexEx[0]);
        $conjIndex = intval($verbConjIndexEx[1]);

        $verbOk[$verbIndex][$conjIndex] = $verbs[$verbIndex][$conjIndex] === $_POST[$verbConjIndex];
        $toAsk[$verbIndex][$conjIndex] = $_POST[$verbConjIndex];
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test de verbos irregulares</title>
    <?php if ($verbOk) { ?>
        <style>
            .error {
                background-color: #ee111155;
            }

            .ok {
                background-color: #11dd1155;
            }
        </style>
    <?php } ?>
</head>

<body>

    <h1>Test de verbos irregulares</h1>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <table>
            <tr>
                <th colspan="2">Nivel: <?= $nivel ?></th>
                <th colspan="2">Número de verbos: <?= $num ?></th>
            </tr>
            <tr>
                <th>Traducción</th>
                <th>Infinitive</th>
                <th>Simple Past</th>
                <th>Past Participle</th>
            </tr>
            <?php foreach ($toAsk as $verbIdx => $verb) { ?>
                <tr>
                    <?php foreach ($verb as $idx => $conj) { ?>
                        <td>
                            <input class="<?= $verbOk[$verbIdx][$idx] ? "ok" : "error" ?>" type="text" name="<?= $verbIdx . "-" . $idx ?>" value="<?= $conj ?>">
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        <input name="sendTest" type="submit" />
    </form>

<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>
</body>

</html>
