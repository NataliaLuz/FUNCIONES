<?php
//FUNCIONES DE CADENA DE LTRIM
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";


$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// retira los caracteres ASCII de control al inicio de $binary
// (de 0 a 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);

?>