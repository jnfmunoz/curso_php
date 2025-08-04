<?php

// $base = 2;
// $exponente = 5;

// $resultado = 1;

// for($i = 1; $i <= $exponente; $i++){
//     $resultado *= $base;
// }

// echo "El valor de $base elevado a $exponente es: $resultado";

// $filas = 10;

// for($i = 1; $i <= $filas; $i++){

//     for( $j = 1; $j <= $i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }

$nombres = ['Juan', 'Francisco', 'Camilo', 'Andrés'];
// echo $nombres[0];

foreach ($nombres as $indice => $nombre) {
    echo "id: ". $indice . " Nombre: " . $nombre . "<br>";
}

?>
