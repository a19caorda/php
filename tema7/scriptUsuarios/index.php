<?php

/**
 * @author David Castilla Ortiz
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form method="POST" action="./genScript.php" enctype="multipart/form-data">
        <div>
            <select id="kind" name="kind">
                <option value="sh" selected>Linux</option>
                <option value="sql">MySQL</option>
            </select>
            <label for="kind">Tipo de OS</label>
        </div>
        <div>
            <select id="year" name="year">
                <?php for ($i = date('y') - 3; $i < date('y') + 4; $i++) { ?>
                    <option <?php if ($i == date('y')) echo "selected"; ?> value="<?= $i . $i + 1 ?>"><?= $i ?>/<?= $i + 1 ?></option>
                <?php } ?>
            </select>
            <label for="year">Año académico</label>
        </div>
        <div>
            <select id="class" name="class">
                <option value="1daw">1 DAW</option>
                <option value="2daw" selected>2 DAW</option>
                <option value="1asir">1 ASIR</option>
                <option value="2asir">2 ASIR</option>
            </select>
            <label for="class">Curso</label>
        </div>
        <div><input id="file" name="file" type="file"><label for="file">Archivo de alumnos</label></div>
        <div><input type="submit"></div>
    </form>
</body>

</html>
