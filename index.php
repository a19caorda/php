<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>David Castilla Ortiz</title>
</head>

<body>

<h1>Hola! Soy David Castilla</h1>
<ul>
    <?php

    foreach (range(1, 1) as $ejercicio) {
        echo "<li><a href=\"ejercicio$ejercicio\">Ejercicio $ejercicio</a></li>";
    }

    ?>
</ul>

</body>

</html>
