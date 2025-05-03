<?php
    const PI = 3.1416;
    echo PHP_VERSION."<br>";
    echo __FILE__."<br>";
    echo(9 / 3)."<br>";
    echo(3 ** 4)."<br>";


    $j = 10;
    for($i=1;$i<=4;$i++){
        echo $j--."<br>";
    }

/* 
$var = "saludos\n";
$var = 1;
echo $var;
echo "Quiero a mucho a mi macaca\n";
echo "Quiero a mucho a mi macaca";

$var = "saludos\n";
$var;
*/

// esto es un comentario de línea 
/* esto
es un comentario
en bloque */

$n1 = 45;
$n2 = 78;
$suma = $n1 + $n2;
echo "La suma seria: ".$suma;





/*
$var = "saludos\n";
echo $var;*/

echo "<pre>"; // Para ver bien el var_dump en navegador

$array1 = array("1", 2, false);
var_dump($array1);

$array2 = [
    "nombre" => "1",
    "edad" => 2,
    "estado" => false
];
var_dump($array2);

var_dump($array1[0]);
var_dump($array2["nombre"]);

echo "</pre>"; // Cerramos <pre> si queremos
?>
