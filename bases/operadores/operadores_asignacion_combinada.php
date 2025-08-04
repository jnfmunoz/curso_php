<?php 

$a = 10;
// $b = $a++; // [$a--, ++$a, --$a]
$b = 5;
$a += $b; // [ -= , *=, /=, %= ]

echo "El valor de a es: $a <br>";
echo "El valor de b es: $b <br>";

?>
