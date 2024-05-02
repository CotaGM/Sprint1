<?php

function getNumerologia($num){
 
  do{
    foreach(str_split($num) as $new_num){
      $sum_num += $new_num;
    }
    $num = $sum_num;
    }while($num >= 10);
   
  switch($num){
    case 0: 
      return "el tot";
      break;  
      
    case 1: 
      return "individualidad";
      break;
      
    case 2:
      return "dualidad";
      break;
      
    case 3:
      return "raó";
      break;
      
    case 4:
      return "estabilización";
      break;
      
    case 5:
      return "amor";
      break;
      
    case 6:
      return "destrucción";
      break;
      
    case 7:
      return "saviesa";
      break;
      
    case 8:
      return "poder";
      break;
      
    case 9:
      return "generosidad";
      break;
      
    default:
      return "ingresa un numero";
  }  
}
echo getNumerologia(93);
?>