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

        foreach (range(1, 10) as $i) {
            echo "<li><a href=\"./ejercicio$i\">Ejercicio $i</a></li>";
        }

        ?>
    </ul>

</body>

</html>
