<?php

/**
 * @author David Castilla Ortiz
 */

$trabajos = array(
    "Comunidades" => "./comunidades.php"
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tema 3. Array</title>
</head>

<body>
    <?php foreach ($trabajos as $trabajo => $path) { ?>
        <li><a href="<?= $path ?>"><?= $trabajo ?></a></li>
    <?php } ?>
</body>

</html>
