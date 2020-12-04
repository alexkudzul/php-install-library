<?php

require_once '../vendor/autoload.php';

$numeros = array("numero1", "numero2", "numero3");
\FB::log($numeros);

$nombres = array("nombre" => "Alex", "apellidos" =>"Ku Dzul");
FB::log($nombres);

echo "Hola";

FB::log("Mostrar por consola");

?>