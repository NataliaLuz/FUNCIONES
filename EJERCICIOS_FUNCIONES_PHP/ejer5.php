<?php
//FUNCION VARIABLES EMPTY
$var = 0;

// Se evalúa a true ya que $var está vacia
if (empty($var)) {
    echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
}

// Se evalúa como true ya que $var está definida
if (isset($var)) {
    echo '$var está definida a pesar que está vacía';
}
?>