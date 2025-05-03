<?php
//1
$a = 11;
$b = 20;
$c = 12;

$contador = 0;
if ($a > 20 && $a < 50){
    $contador++;
}

if($b < 20 && $b <= 50){
    $contador++;
}

if($b < 20 && $b <= 50){
    $contador++;
}
var_dump(value: $contador > 0);
//2
echo "<br>";

$a = 1;
$b = 2;
$c = 3;

$mayor = 0;
if($a > $b){
    if($a > $c){
        echo $a;
    }else{
        echo $c;
    }
}else{
    if($b > $c){
        echo $b;
    }else{
        echo $c;
    }
}
echo "<br>";
//3
$a = 95;
$b = 95;

$cercano_a = 100 - $a;
$cercano_b = 100 - $b;

if($cercano_a < $cercano_b){
    echo $a;
}else if($cercano_a == $cercano_b){
    echo 0;
}else {
    echo $b;
}
echo "<br>";
//4
echo "<table>";
for($i=1;$i<=6;$i++){
    echo "<tr>";
    for($j=1;$j<=6;$j++){
        echo "<td stylel='text-align: right'>";
        echo $i*$j."&emsp;";
        echo "</td>";
        if($j%6 == 0){
            echo "</tr>";
        }
    }
}
echo "</table>";