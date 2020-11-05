<?php

/**
 * @author David Castilla Ortiz
 */

$trabajos = ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tema 4. Formularios</title>
</head>

<body>
    <?php foreach ($trabajos as $trabajo => $path) { ?>
        <li><a href="<?= $path ?>"><?= $trabajo ?></a></li>
    <?php } ?>
</body>

</html>
