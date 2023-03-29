<?php
//FUNCION DE CADENA DE STRCMP
$var1 = "Hola";
$var2 = "hola";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 no es igual a $var2 en una comparación que considera mayúsculas y minúsculas';
}
?>