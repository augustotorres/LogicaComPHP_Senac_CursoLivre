<?php
$a = true;
$b = false;
$c = true;

// Usando and e or
$resultado1 = $a and $b or $c;
$resultado2 = $a && $b || $c;

// Usando && e ||
$resultado3 = $a && $b || $c;
$resultado4 = $a and $b || $c;

// Exibindo os resultados
echo "Resultado 1: " . ($resultado1 ? 'true' : 'false') . "\n"; // Deve ser true
echo "Resultado 2: " . ($resultado2 ? 'true' : 'false') . "\n"; // Deve ser true
echo "Resultado 3: " . ($resultado3 ? 'true' : 'false') . "\n"; // Deve ser true
echo "Resultado 4: " . ($resultado4 ? 'true' : 'false') . "\n"; // Deve ser false
?>
