<?php //CURSO PLATZI.
//Crando arreglos forma uno
$edades=[20,15,20,30,55,40];
//Creando Arreglos de forma dos
$notas=array(12,15,13,12);
echo"Creando Arreglos"."\n";
echo '*********************'."\n" ;
echo 'Muestra la Edad:'.$edades[02] ."\n";
echo 'Muestra la Nota:'.$notas[02] ."\n";
echo"\n" ;
//Arreglos Asociativos
//******************************************** */
echo"Arreglos Asociativos"."\n" ;
echo "********************"."\n" ;
$edadAsocia=array("jose"=>21,"naila"=>38,"Josefina"=>45,"Julio"=>50);
echo"La Edad de Juli es: ".$edadAsocia["Julio"] ;
echo"\n";

$cafeprecio = array("capuchino" => 4,"expres"=>3,"fuerte"=>2.5,"conleche"=>5.5);
echo"El Precio del Cafe con Leche es: {$cafeprecio["conleche"]} Euros";
//Arreglos dentro de otro Arreglo.
echo"Arreglo Asociativo \n";
$familia=array("jose"=>array("edad"=>40,"estudio"=>"tsu","cedula"=>16986545),
"naila"=>array("edad"=>38,"estudio"=>"ing","cedula"=>20986545),
"josefina"=>array("edad"=>45,"estudio"=>"lic","cedula"=>10986545),
"Julio"=>array("edad"=>55,"estudio"=>"bach","cedula"=>886545)
);
echo"Datos de Josefina:". $familia["josefina"]["estudio"]."\n";
echo"Cedula  de Josefina:". $familia["josefina"]["cedula"]."\n";
?>