<?php

    $base = 2;
    $exponente = 5;

    $resultado = 1;

    for($i = 0; $i < $exponente; $i++){
        $resultado *= $base;
    }

    echo "El valor de $base elevado a $exponente es: $resultado";

?>