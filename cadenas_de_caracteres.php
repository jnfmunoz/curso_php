<?php 
    
    $cadena = "aéioui";

    // echo $cadena[1];
    echo strlen($cadena) . "<br>"; // cantidad de bytes
    echo mb_strlen($cadena) . "<br>"; // cantidad de caracteres
    echo strpos($cadena, 'i') . "<br>"; // buscar un caracter y devolver la primera coincidencia
    echo strrpos($cadena, 'i') . "<br>"; // buscar un caracter y devolver la última coincidencia

?>