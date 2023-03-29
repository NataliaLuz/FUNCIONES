<?php
//FUNCIONES DE CADENA DE PREG_MATCH
preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);
?>