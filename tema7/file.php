<?php

/**
 * David Castilla Ortiz
 **/

print("<pre>" . print_r($_FILES, true) . "</pre>");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">
        <input name="file" type="file">
        <input name="subm" type="Submit">
    </form>
</body>

</html>
