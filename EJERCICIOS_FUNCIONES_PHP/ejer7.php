<?php
//FUNCIONES VARIABLES IS_DOUBLE
$a = 32;
echo "a is " . is_double($a) . "<br>";

$b = 0;
echo "b is " . is_double($b) . "<br>";

$c = 32.5;
echo "c is " . is_double($c) . "<br>";

$d = "32";
echo "d is " . is_double($d) . "<br>";

$e = true;
echo "e is " . is_double($e) . "<br>";

$f = "null";
echo "f is " . is_double($f) . "<br>";

$g = 1.e3;
echo "g is " . is_double($g) . "<br>";
?>