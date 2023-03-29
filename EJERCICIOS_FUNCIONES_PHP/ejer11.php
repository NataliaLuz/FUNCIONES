<?php
//FUNCION CADENA STRPOS

// Se puede buscar por el caracter, ignorando cualquier cosa antes del offset
$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); // $pos = 7, no 0
?>