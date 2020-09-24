<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>David Castilla Ortiz</title>
</head>


<?php
$name = "David Castilla Ortiz";
$age = 21;
$image = "./image.png"
?>

<body>

    <h1> Hola, soy <?= $name ?> </h1>
    <div>
        <p>Tengo <?= $age ?> años</p>
        <p>Aquí tienes una foto mía: </p>
        <img src="<?= $image ?>" width="500px" />
    </div>

</body>

</html>
