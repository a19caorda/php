<?php

/**
 * @author David Castilla Ortiz
 *
 */

$procesarForm = true;
$msgErrorNombre = $msgErrorApellidos = $msgErrorEmail = "";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];

if (!isset($_POST['enviar'])) {
    $procesarForm = false;
} else {
    if (empty($nombre)) {
        $msgErrorNombre    = "El nombre es requerido";
    }
    if (empty($apellidos)) {
        $msgErrorApellidos = "Los apellidos son requeridos";
    }
    if (empty($email)) {
        $msgErrorEmail     = "El email es requerido";
    }
}

if ($procesarForm) {
    echo "Nombre: $nombre";
    echo "Apellidos: $apellidos";
    echo "Email: $email";
} else {
    echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\">";
    echo "<div><label>Nombre</label><input name=\"nombre\" value=\"" . $nombre . "\" type=\"text\"></div>";
    echo "<div><label>Apellidos</label><input name=\"apellidos\" value=\"" . $apellidos . "\" type=\"text\"></div>";
    echo "<div><label>Email</label><input name=\"email\" value=\"" . $email . "\" type=\"email\"></div>";
    echo "</form>";
}
?>
<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php/blob/master" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>
