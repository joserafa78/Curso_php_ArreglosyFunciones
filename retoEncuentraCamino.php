<?php 
//Reto Encuetra los distintos caminos para llegar a las casas.
//    0---0---0---0---0---0
//   / \ / \ / \ / \ / \ / \
//  0---0---0---0---0---0---0

$numeroTienda=20;
$anterior=0;
$actual=1;
for ($i=2; $i < $numeroTienda; $i++) { 
    $temporal=$actual;
    $actual+=$anterior;
    $anterior =$temporal;
    echo $actual."\n";
}
// echo"La Cantidad de Rutas es:".$actual."\n";

?>