<?php
//FUNCION VARIABLES SETTYPE
$foo = "5bar"; // cadena
$bar = true;   // booleano

settype($foo, "integer"); // $foo es ahora 5   (entero)
settype($bar, "string");  // $bar es ahora "1" (cadena)
?>