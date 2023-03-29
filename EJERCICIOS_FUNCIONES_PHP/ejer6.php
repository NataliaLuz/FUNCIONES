<?php
//FUNCION DE VARIABLES DE  IS_INTEGER
$a = 32;
echo "a is " . is_integer($a) . "<br>";

$b = 0;
echo "b is " . is_integer($b) . "<br>";

$c = 32.5;
echo "c is " . is_integer($c) . "<br>";

$d = "32";
echo "d is " . is_integer($d) . "<br>";

$e = true;
echo "e is " . is_integer($e) . "<br>";

$f = "null";
echo "f is " . is_integer($f) . "<br>";
?>