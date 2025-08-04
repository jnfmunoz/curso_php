<?php

$a = 5;
$b = 10;

/* function test(){
    global $a; 
    $a = 3;
    echo $a;
}  

test(); */

function test(&$n){
    $n = $n + 10;
}

test($a);
test($b);
echo "<br>";
echo $a . "<br>" . $b;
    
?>
