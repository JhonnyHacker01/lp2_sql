<?php

// 1. Clase que muestra un mensaje al inicializar
class MiClase {
    public function __construct() {
        echo "MiClase ha sido inicializada\n";
    }
}

// 2. Clase con mensaje personalizado
class Saludo {
    public function __construct($nombre) {
        echo "Hola a todos, soy $nombre\n";
    }
}

// 3. Clase que calcula el factorial
class Factorial {
    public function calcular($num) {
        if ($num < 0) return "Número inválido";
        $resultado = 1;
        for ($i = 1; $i <= $num; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}

// 4. Clase que ordena un array
class OrdenarArray {
    public function ordenar($array) {
        sort($array);
        return $array;
    }
}

// 5. Clase Calculadora
class MiCalculadora {
    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function sumar() {
        return $this->a + $this->b;
    }

    public function restar() {
        return $this->a - $this->b;
    }

    public function multiplicar() {
        return $this->a * $this->b;
    }

    public function dividir() {
        if ($this->b == 0) return "Error: División por cero";
        return $this->a / $this->b;
    }
}

// Pruebas
new MiClase();
new Saludo("Scott");

$fact = new Factorial();
echo $fact->calcular(6) . "\n"; // 720

$orden = new OrdenarArray();
print_r($orden->ordenar([5, 2, 8, 1]));

$calc = new MiCalculadora(12, 6);
echo $calc->sumar() . "\n"; // 18
echo $calc->multiplicar() . "\n"; // 72

?>
