<?php 
//Manipulardo los Arreglos con las funciones en PHP
$numeros= array(20,32,25,21,45,85,47,25,15,);
//--------coun-------
$total=count($numeros);// Total de Registros
echo"El total de Registros en Arreglo es:". $total ."\n";
//-------push------------
array_push($numeros,100 );//Agrega un registro justo al final de la lista.
echo"Muestra con Var_durp - los registro en el Arreglo"."\n";
//var_dump($numeros );
echo"\n";
//---------------is_array---------------
$no_Arreglo="";
$MiArreglo= array("Amor","Vida","Salud");
echo"Esto es un Arreglo?: ". is_array($no_Arreglo)."\n" ;
var_dump(is_array($no_Arreglo));
var_dump(is_array($MiArreglo));
echo"\n";
//-----------------explode------------------
//Convierte un Strin en un Arreglo a partir de un Separador.
$ListaFrutas= "manzana,piña,pera,mango,platano,uva,fresa";
$frutas=explode(",",$ListaFrutas);//Convierte.
echo"Muestra Nuevo Array Convertido desde la lista String.";
var_dump($frutas);
echo"Valor:".$frutas[2];
echo"\n";
//-----------------inplode-------------------------
//Convierte un Arreglo a cadena de caractieres.
$lengues= array("php","c","paython","go","ruby","java","c#");
$listaLenguejes= implode(",",$lengues);
echo"Lista de Lenguajes de Programacion:"."\n";
var_dump($listaLenguejes);
echo"\n";
//---------------in_array-----------------
//Revisa que en el arreglo exita ya un registro y devuelve booleano.
$componentes= array("microscpio","cautin","destornillador","pinzas","estaño");
echo"Muestra si el nombre existe en el arreglo"."\n";
var_dump( in_array("pinzas",$componentes));
echo"\n";
var_dump( in_array("cable",$componentes));
//----------------user-------------------------
// usort ordena un arreglo utilizando una función de comparación personalizada
$precios_de_cafes = [12, 56, 67, 88,100, 2, 1];
usort($precios_de_cafes, function($a, $b){
    // La función de comparación utiliza el operador spaceship (<=>)
    // que retorna -1 si $a es menor que $b, 0 si son iguales, y 1 si $a es mayor que $b
    return $b <=> $a;

});
var_dump($precios_de_cafes);
?>