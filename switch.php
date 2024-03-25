<?php 
//usando el caso Switch.. con los Dias de la Semana
echo"Usando condicon Switch."."\n";

$diaSemana="martes";


switch ($diaSemana) {
    case 'lunes':
     echo"Estudiar Ingles"."\n";
     break;
     case 'martes':
      echo"Estudiar Programacion"."\n";
      break;
     case 'miercoles':
      echo"Estudiar Musica"."\n";
      break;
     
     default:
     echo"Error"."\n";
     
        break;
}



