<?php

/**
 * @author David Castilla Ortiz
 */

$aDatosPersonales = array("nombre", "apellidos", "email");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <form action="form.php" method="POST">
        <?php foreach ($aDatosPersonales as $datoPersonal) { ?>
            <label for="<?= $datoPersonal ?>"><?= $datoPersonal ?></label>
            <input name="<?= $datoPersonal ?>" type="text">
            <br>
        <?php } ?>
        <button type="submit">Submit</button>
    </form>
    <footer>
        <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
    </footer>

</body>

</html>
