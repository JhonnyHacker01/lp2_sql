<?php
2 require_once "clases/Estudiante.php";
3
4 $estudiante = new Estudiante ("Pepito");
5 $estudiante->matricula();
6 $estudiante->setCodigo("2021054788");
7 var_dump($estudiante->getCodigo());