<?php 
//El Ciclo Do while. se ejecuta al menos una vez.
$nombres= array("jose","maria","andres","sandra");
do {
    $nuevo=readline("Nuevo nombre:",);
    echo"\n";
} while (in_array($nuevo, $nombres));
array_push($nombres,$nuevo);
echo"Carado Exitosamente."."\n";
var_dump($nombres)
?>