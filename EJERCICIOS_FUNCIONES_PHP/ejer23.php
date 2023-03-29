<?php
//FUNCION DECADENA DE EXPLODE
/*
   Un string que no contiene el delimitador simplemente
   devolverá un array de longitud uno con el string original.
*/
$entrada1 = "hola";
$entrada2 = "hola,qué tal";
var_dump( explode( ',', $entrada1 ) );
var_dump( explode( ',', $entrada2 ) );

?>