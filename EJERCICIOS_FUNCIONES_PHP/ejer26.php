<?php
//FUNCION DE CADENA DE STR_PAD
$input = "Alien";
echo str_pad($input, 10);                      // produce "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produce "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produce "__Alien___"
echo str_pad($input,  6, "___");               // produces "Alien_"
echo str_pad($input,  3, "*");                 // produces "Alien"
?>