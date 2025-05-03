<?php
//a) General
/*1. Escribe un programa que verifique, dados tres números enteros, se encuentran entre
20...50 (incluyendo ambos). Devolver true si 1 o más de los números están dentro del
rango sino devolver false (usar la función var_dump(), para mostrar el resultado).*/

function verificarRango($a, $b,$c){$inRange = function($num){
    return $num >=20 && $num <= 50;
};
$resultado = $inRange($a) || $inRange($b) || $inRange($c);
var_dump($resultado);
}
verificarRango(11,20,12);
verificarRango(30,30,17);
verificarRango(25,35,50);
verificarRango(15,12,8);
?>