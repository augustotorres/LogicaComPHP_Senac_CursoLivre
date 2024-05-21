<?php
$numero = 8;


for ($numero=1; $numero <= 10 ; $numero++) { 
  
    echo "================== Tabuada do $numero ==================<br>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo $numero . " X " . $i . " = " . $numero * $i . "<br>";
    }
}

?>