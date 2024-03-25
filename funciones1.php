<?php 
//iniciando las funciones

function nombre(){
    $numero= rand(1,10); //Numero Aleatorio del 1 al 10
    switch ($numero) {
        case '1':
            echo"Jose"."\n";
            break;
        case '2':
            echo"Naila"."\n";
            break;
        case '3':
            echo"Graciela"."\n";
            break;
        case '4':
            echo"Jorge"."\n";
            break;
        case '5':
            echo"Isabela"."\n";
            break;
        case '6':
            echo"Jorge"."\n";
            break;
        case '7':
            echo"Barvara"."\n";
            break;
        case '8':
            echo"Natalia"."\n";
            break;
        case '9':
            echo"Dalila"."\n";
            break;
        case '10':
            echo"Terera"."\n";
            break;
        
        
        default:
            echo"Error.Numero\n";
            break;
    }
}

//Invoca Funcion.
nombre();
echo"\n";
//Valores por defectos en funcion.
function sumando($a=0,$b=0) {
    $resultado=$a+$b;
    echo"Resultado de la Suma es: $resultado"."\n";
}

//Operador Un Packe.
echo"*********OPERADOR UNPAQUE***********\n";
$areglo1= array(2,5);
$areglo2= array(2,5,4);
$concatena= array(...$areglo1,...$areglo2);
echo"Arreglo Concatenado: ";
var_dump($concatena);

//Array Inpaque.
//Pasar parametros de forma Dinamica uasando Array Impacken
echo"****Pasando Parametro de forma Dinamica***","\n";
$array1= array(45,4);
$array2= array(65,23);
$array3= array(75,10);

sumando(...$array1);
sumando(...$array2);
sumando(...$array3);

//Sumando infinita.. usando parametros Dinamicos.
function sum_infinity(...$params){
    $result =0;
    foreach ($params as $key => $value) {
      $result+= $value;
    }
    echo "El resultado de Suma Infinita es = ". implode("+",$params) ." es:$result \n";
 }
 
 sum_infinity(1,3,5,5,8);

 //********Usando la RETURN************
 echo"**********Usando RETURN en la Funcion************\n";
 function freddyDice()
{
    $numero_aleatorio = rand(1, 4);
    switch ($numero_aleatorio) {
        case 1:
            return "Nunca pares de aprender.\n";
            break;
        case 2:
            return "Las empresas no son familia.\n";
            break;
        case 3:
            return "La tecnología es el futuro.\n";
            break;
        case 4:
            return "AMO PHP.\n";
            break;
    }
}
echo freddyDice();
echo "\n";
//*****ordenar arreglos con operador nave espacial***
$precios_de_cafes = [12, 56, 67, 88,100, 2, 1];

// usort ordena un arreglo utilizando una función de comparación personalizada
usort($precios_de_cafes, function($a, $b){
    // La función de comparación utiliza el operador spaceship (<=>)
    // que retorna -1 si $a es menor que $b, 0 si son iguales, y 1 si $a es mayor que $b
    return $b <=> $a;

});

// var_dump imprime información detallada sobre una variable, en este caso, el arreglo ordenado
echo"Arreglo ORDENADO:\n";
var_dump($precios_de_cafes);

?>