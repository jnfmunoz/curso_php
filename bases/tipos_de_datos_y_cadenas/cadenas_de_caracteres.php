<?php 
    
    $cadena = "aéioui";

    echo $cadena[0] . "<br>";
    echo strlen($cadena) . "<br>"; // cantidad de bytes
    echo mb_strlen($cadena) . "<br>"; // cantidad de caracteres
    echo strpos($cadena, 'i') . "<br>"; // buscar un caracter y devolver la primera coincidencia
    echo strrpos($cadena, 'i') . "<br>"; // buscar un caracter y devolver la última coincidencia

    $cadena2 = "Hola Mundo Cómo estás?";

    echo str_contains($cadena2, 'Mundo') ? "Encontrado" . "<br>" : "No encontrado" . "<br>"; // retorna bool
    echo str_starts_with($cadena2, 'Mundo') ? "Encontrado" . "<br>" : "No encontrado" . "<br>"; // retorna bool
    echo str_ends_with($cadena2, 'estás?') ? "Encontrado" . "<br>" : "No encontrado" . "<br>"; // retorna bool

    $cadena3 = "Prueba";
    $cadena4 = "prueba";

    // strcase : omitir may y min
    if(strcmp($cadena3, $cadena4) == 0){
        echo "Las cadenas son iguales" . "<br>";
    } else {
        echo "Las cadenas son diferentes" . "<br>";
    }

    $cadena5 = "Hola mundo";

    echo substr($cadena5, 1, 3) . "<br>";       
    echo substr($cadena5, -5, 3) . "<br>";
    echo str_replace("Hola", "Adiós", $cadena5) . "<br>";
    echo strtolower($cadena5) . "<br>";
    echo strtoupper($cadena5) . "<br>";
    echo ucfirst($cadena5) . "<br>";
    echo ucwords($cadena5) . "<br>";



?>