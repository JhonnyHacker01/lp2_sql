<?php
class Usuario{
    public function getCodigo(): string{
        return $this->codigo;
    }
    public function setCodigo (string $codigo): void{
        $this->codigo = $codigo;
    }
    public function getPassword(): string{
        return $this->password;
    }
    public function setPassword(string $password): void
        $this->password = $password;
