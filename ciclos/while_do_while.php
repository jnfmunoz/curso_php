<?php

    $i = 10;
    
    // while ($i <= 20){
    //     echo "$i <br>";
    //     $i++;
    // }

    // do{
    //     echo "$i <br>";
    //     $i++;
    // } while($i < 10);

    // echo "has salido del bucle";

    $base = 2;
    $exponente = 5;

    $resultado = 1;
    $i = 1;

    while($i <= $exponente){
        $resultado *= $base;
        $i++;
    }

    echo "El valor de $base elevado a $exponente es: $resultado";

?>
