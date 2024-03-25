<?php 
//Ciclo inteligente FOREACH.
$cafe= array("capuchino"=>8,"mocca"=>6,"conleche"=>4,"recalentado"=>2,"negro"=>3,"dobleNegro"=>5);
foreach ($cafe as  $nob => $precio ) {
    echo"El precio del cafe ".  $nob ." es: ". $precio." Euros \n";
}
echo"\n";

// uso del Break-------------
echo"USANDO EL BREAK"."\n";
foreach ($cafe as $cafe => $precio) {
    
    echo"Actualmente Buscando a $cafe \n";
    if ($cafe=="conleche") {
        echo"Encontre a Conleche \n";
        break;
    }
}
echo"\n";
// uso del CONTINU-------------
$cafe1= array("capuchino"=>8,"mocca"=>6,"conleche"=>4,"recalentado"=>2,"negro"=>3,"dobleNegro"=>5);
echo"USANDO EL CONTINUE"."\n";

foreach ($cafe1 as $cafe => $precio) {
    
    if ($cafe=="recalentado") {
        continue;
    }
    echo"El Cafe $cafe  es Riquisimo\n";

}

echo"\n";


?>