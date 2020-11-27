<?php

/**
 * @author David Castilla Ortiz
 */


$accents = array(
    "á" => "a",
    "é" => "e",
    "í" => "i",
    "ó" => "o",
    "ú" => "u",
);

function genUsername($lastName1, $lastName2, $name, $accents)
{
    return strtr(
        mb_strtolower(mb_substr($lastName1, 0, 2) . mb_substr($lastName2, 0, 2) . mb_substr($name, 0, 2)),
        $accents
    );
}

$kind = $_POST["kind"] ?? "sh";
$filename = $_FILES['file']['name'];
$filepath = $_FILES['file']['tmp_name'];
$scriptpath = "/tmp/" . time();

$format = "";
$script = fopen($scriptpath, "w");
$file = fopen($filepath, "r");

$class = $_POST["class"];
$year = $_POST["year"];
$group = "$class$year";

if ($kind == "sql") {
    $format = 'CREATE USER \'%1$s\'@\'localhost\' IDENTIFIED BY \'%1$s\';

CREATE DATABASE ' . $group . '_%1$s;
GRANT ALL PRIVILIGIES ON ' . $group . '_%1$s.* TO \'%1$s\'@\'localhost\' IDENTIFIED BY \'%1$s\';

';
} else {
    fwrite($script, "#! /bin/bash");
    $format = '
groupadd %1$s
useradd %1$s -m -d /home/' . $group . '/%1$s -s /bin/bash -g %1$s -p $(echo "%1$s" | openssl passwd -1 -stdin)
mkdir /home/' . $group . '/%1$s/public_html
chown -R ' . $group . ':%1$s /home/' . $group . '/%1$s
';
}

for ($i = 0; $i < 8; $i++)
    fgets($file);

$reps = array();

while (!feof($file)) {
    $line = fgets($file);
    $matches = array();
    if (preg_match("/^\s*(\pL+)\s+(\pL+)\s*,\s*(\pL+)/u", $line, $matches)) {
        $username = genUsername($matches[1], $matches[2], $matches[3], $accents);

        isset($reps[$username]) ? $reps[$username]++ : $reps[$username] = "";

        fwrite($script, sprintf($format, "$username" . $reps[$username]));
    }
}
fclose($file);
fclose($script);

header('Content-Description: File Transfer');
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="alumnos.' . $kind . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filepath));

readfile($scriptpath);
