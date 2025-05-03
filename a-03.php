<?php
function masCercano($a,$b){
    if ($a == $b){
        echo 0 . "\n";
    } else {
        $distA = abs(100 - $a);
        $distB = abs(100 - $b);
        echo ($distA < $distB) ? $a : $b;
        echo "\n";
    }
}

masCercano(78,95);
masCercano(95,95);
masCercano(99,102);
?>