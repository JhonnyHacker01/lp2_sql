<?php
require_once "clases/Usuario.php";

class Estudiante{
    private $nombres;
    public function _ construct(string $nombres) {
        $this->nombres = $nombres;
}
public function matricula(): void{
echo "te has matriculado ".$this->nombres;
}
public function getNombres (): string{
return $this->nombres;
}
}