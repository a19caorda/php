<?php

/**
 * @author David Castilla Ortiz
 */

$menu = array(
    array("text" => "Home", "href" => "#"),
    array("text" => "Blog", "href" => "#"),
    array("text" => "Contact", "href" => "#"),
    array("text" => "Gallery", "href" => "#"),
);

function generate_link($text, $href)
{
    echo "<li><a href=\"$href\">$text</a></li>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <ul>
        <?php foreach ($menu as $link) {
            generate_link($link["text"], $link["href"]);
        } ?>
    </ul>
<footer>
    <h4><a href="<?= "https://github.com/a19caorda/php" . $_SERVER["PHP_SELF"] ?>">Enlace a github</a></h4>
</footer>
</body>

</html>
