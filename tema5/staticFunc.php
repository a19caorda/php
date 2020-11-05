<?php
/**
 * @author David Castilla Ortiz
 */

function manejoVariableEstatica() {
    static $l = 0;
    $l++;

    echo $l;
}

for ($i = 0; $i <= 5; $i++) {
    manejoVariableEstatica();
}
