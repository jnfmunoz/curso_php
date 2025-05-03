<?php
    // 9! = 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9

    function factorial($numero ){
        $resultado = 1;
        
        for ($i=1; $i <= $numero; $i++) {    
            $resultado = $resultado * $i;
        }    

        // echo "El factorial de $numero es: " . $resultado;
        return $resultado;
    }

    // factorial(9);
    $resultado = factorial(9);
    echo "$resultado";
    
?>
