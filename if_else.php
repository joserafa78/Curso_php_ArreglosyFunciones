<?php
//Condicionales en php
$asientoDisponibles=0;
if ($asientoDisponibles>0) {
    echo"Si, puedes ver la pelicula. ENTRA.";
}
else{
    echo"Lo Siento..Chaou.."."\n";
}

//Condicionales anidadas.

//Excelente = 20-18
//Buena     = 14-17
//Regular   = 10-13
//Mejorar   = 07-09
//Mala      = 00-06

$notaExamen = 16 ;
$cualificativo="vacio";

if ($notaExamen>=18) {
    $cualificativo="Excelente";
} else if($notaExamen>=14){
    $cualificativo="Bueno";
} else if($notaExamen>=10){
    $cualificativo="Regular";
} else if($notaExamen>=07){
    $cualificativo="Mejorar";
} else if($notaExamen>=0){
    $cualificativo="Mala";
}

echo"Cualidad es:".$cualificativo;
?>