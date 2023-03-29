<?php
//FUNCIONES DE FECHA Y HORA  DE TIME

$semanaSiguiente = time() + (7 * 24 * 60 * 60);
                   // 7 días; 24 horas; 60 minutos; 60 segundos
echo 'Ahora:            '. date('Y-m-d') ."\n";
echo 'Semana Siguiente: '. date('Y-m-d', $semanaSiguiente) ."\n";
// o usar strtotime():
echo 'Semana Siguiente: '. date('Y-m-d', strtotime('+1 week')) ."\n";
?>
