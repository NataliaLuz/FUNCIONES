<?php
//FUNCION variables ISSET
$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           // FALSE

// La clave 'helo' es igual a NULL así que no se considera definida
// Si desea comprobar los valores NULL clave, intente:
var_dump(array_key_exists('hello', $a)); // TRUE

// Comprobando valores de arrays con más profunidad
var_dump(isset($a['pie']['a']));        // TRUE
var_dump(isset($a['pie']['b']));        // FALSE
var_dump(isset($a['cake']['a']['b']));  // FALSE

?>