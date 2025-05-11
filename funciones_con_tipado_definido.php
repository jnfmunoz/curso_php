<?php 

    declare(strict_types=1);
    function sumarEnteros(int $entero1, int $entero2): int | float
    {
        return $entero1 + $entero2; 
    }

    // $resultado = sumarEnteros(2,7.4);
    $resultado = sumarEnteros(2,7)/2;

    echo $resultado;

?>