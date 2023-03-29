<?php
//FUNCIN NUMERICA DE MAX
echo max(2, 3, 1, 6, 7);  // 7
echo max(array(2, 4, 5)); // 5
// La cadena 'hola' es tratada como 0 cuando se compara con un número entero
// Ya que los dos valores son iguales, el orden en el que se proporcionan determina el resultado
echo max(0, 'hola');     // 0
echo max('hola', 0);     // hola
// Aquí se compara -1 < 0, por lo que 'hola' es el valor mayor
echo max(-1, 'hola');    // hola
// Con varios arrays de diferentes longitudes, max devuelve el más largo
$val = max(array(2, 2, 2), array(1, 1, 1, 1)); // array(1, 1, 1, 1)
// Varios arrays de la misma longitud son comparados de izquierda a derecha,
// así que en nuestro ejemplo: 2 == 2, pero 5 > 4
$val = max(array(2, 4, 8), array(2, 5, 1)); // array(2, 5, 1)
// Si se pasan un array y algo que no sea un array, será devuelto el array,
// ya que las comparaciones tratan a los arrays como mayores que cualquier otro valor
$val = max('cadena', array(2, 5, 7), 42);   // array(2, 5, 7)
// Si un argumento es NULL o un booleano, será comparado con
// otros valores usando la regla FALSE < TRUE independientemente de los otros tipos involucrados
// En los ejemplos de abajo, -10 y 10 son tratados como TRUE en la comparación
$val = max(-10, FALSE); // -10
// 0, por el contrario, es tratado como FALSE, por lo que es "menor que" TRUE
$val = max(0, TRUE); // TRUE
?>

