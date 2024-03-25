<?php 
//Este es un Ejercicio usando Arreglos..
$numeroMichi=0;
$Escuelamichis= array(
        array(
        "nombre"=>"jose",
        "ocupacion"=>"albañil",
        "color"=>"negro",
        "comida"=>array("faboritas"=>"pescado,piza",
                        "nofavoritas"=>"limon")),
        array(
        "nombre"=>"miau",
        "ocupacion"=>"dormir",
        "color"=>"blanco",
        "comida"=>array("faboritas"=>"camaron",
                        "nofavoritas"=>"sardina,arroz")),
        array(
        "nombre"=>"lulu",
        "ocupacion"=>"vigilante",
        "color"=>"gris",
        "comida"=>array("faboritas"=>"pollo",
                        "nofavoritas"=>"pescado")),
        array(
        "nombre"=>"pepe",
        "ocupacion"=>"developers",
        "color"=>"amarillo",
        "comida"=>array("faboritas"=>"piza,pollo",
                        "nofavoritas"=>"aguacate")),
    );
echo"Datos del Michi:".$Escuelamichis[$numeroMichi]["nombre"] ."\n";
echo"Ocupacion:".$Escuelamichis[$numeroMichi]["ocupacion"]."\n";
echo"Color:".$Escuelamichis[$numeroMichi]["color"]."\n";
echo"Comida favorita:".$Escuelamichis[$numeroMichi]["comida"]["faboritas"]."\n";
echo"Total de Gatitos en Local:". count($Escuelamichis) ;

?>