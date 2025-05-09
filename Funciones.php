<?php

// 1. Factorial de un número
function factorial($num) {
    if ($num < 0) return "Número inválido";
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

// 2. Verificar si un número es primo
function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// 3. Verificar si una cadena está en minúsculas
function estaEnMinusculas($cadena) {
    return $cadena === strtolower($cadena);
}

// 4. Verificar si una cadena es palíndromo
function esPalindromo($cadena) {
    $cadena = strtolower(str_replace(' ', '', $cadena)); // quitar espacios y convertir a minúsculas
    return $cadena === strrev($cadena);
}

// Pruebas
echo factorial(5) . "\n"; // 120
echo esPrimo(7) ? "Es primo\n" : "No es primo\n"; // Es primo
echo estaEnMinusculas("hola") ? "Minúsculas\n" : "No minúsculas\n"; // Minúsculas
echo esPalindromo("Reconocer") ? "Es palíndromo\n" : "No es palíndromo\n"; // Es palíndromo

?>
