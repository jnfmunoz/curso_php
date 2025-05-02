<?php 
    for ($i=1; $i <= 20; $i++) { 
        
        /* if ($i == 11){
            break;    
        } */

        /* if ($i == 7 || $i == 15) {
            continue;
        } */

        if ($i == 8){
            die(); // exit();
        }

        echo $i . "<br>";
    }

    echo "Saliste del bucle";
?>