<?php
//FUNCION NUMERICA DE MIN
echo min(2, 3, 1, 6, 7);  // 1
echo min(array(2, 4, 5)); // 
// La cadena 'hola' es tratada como 0 cuando se compara con un número entero
// Ya que los dos valores son iguales, el orden en el que se proporcionan determina el resultado
echo min(0, 'hola');     // 0
echo min('hola', 0);     // hola
// Aquí se compara -1 < 0, por lo que -1 es el valor menor
echo min('hola', -1);    // -1
// Con varios arrays de diferentes longitudes, min devuelve el más corto
$val = min(array(2, 2, 2), array(1, 1, 1, 1)); // array(2, 2, 2)
// Varios arrays de la misma longitud son comparados de izquierda a derecha,
// así que en nuestro ejemplo: 2 == 2, pero 4 < 5
$val = min(array(2, 4, 8), array(2, 5, 1)); // array(2, 4, 8)
// Si se pasan un array y algo que no sea un array, el array nunca es devuelto
// ya que las comparaciones tratan a los arrays como mayores que cualquier otro valor
$val = min('string', array(2, 5, 7), 42);   // string
// Si un argumento es NULL o un booleano, será comparado con
// otros valores usando la regla FALSE < TRUE independientemente de los otros tipos involucrados
// En los ejemplos de abajo, -10 y 10 son tratados como TRUE en la comparación
$val = min(-10, FALSE, 10); // FALSE
$val = min(-10, NULL, 10);  // NULL
// 0, por el contrario, es tratado como FALSE, por lo que es "menor que" TRUE
$val = min(0, TRUE); // 0
?>
