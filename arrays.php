<?php
//5
$color = array('blanca','verde','roja','azul','negra');
echo "Siempre recordare esa escena la alfombra ". $color[2].", el pasto ".$color[1].", ".
    "la casa ".$color[0].", el cielo ".$color[3].". El nuevo presidente y su primera ".
    "dama... ";

echo "<br>";
//6
$color = array(4 => 'blanco', 6 => 'verde', 11=> 'roja');
echo $color[4];

echo "<br>";
//7
$temperaturas = [78, 60, 62, 68, 71, 85, 66, 64, 76, 63, 75, 76, 68, 62, 73,
                72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$suma = 0;
$cantidad = 0;
foreach ($temperaturas as $temperatura) {
    $suma += $temperatura;
    $cantidad++;
}

echo "temperatura promedio: " . round(($suma / $cantidad), 2) . "<br>";

$ultimoMaximo = 0;
$altas = array();
for ($i = 1; $i <= 5; $i++) {
    $ultimoMaximo = temperaturaAlta($temperaturas, $altas);
    echo $ultimoMaximo . ", ";
    $altas[] = $ultimoMaximo;
}

function temperaturaAlta(array $temperaturas, array $altas)
{
    $temp = 0;
    foreach ($temperaturas as $temperatura) {
        if ($temperatura > $temp && !in_array($temperatura, $altas)) {
            $temp = $temperatura;
        }
    }
    return $temp;
}

$temperaturas = array_unique($temperaturas);
sort($temperaturas);
echo "<br>";

for ($i = count($temperaturas) - 1; $i >= count($temperaturas) - 5; $i--) {
    echo $temperaturas[$i] . ", ";
}
echo "<br>";
for ($i = 0; $i <= 4; $i++) {
    echo $temperaturas[$i] . ", ";
}
echo "<br>";

//8
$numeros = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = 0; $j < count($numeros) - $i - 1; $j++) {
        if ($numeros[$j] < $numeros[$j + 1]) { // cambio a orden descendente
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

echo "<pre>";
var_dump($numeros);
echo "</pre>";


//probando



?>