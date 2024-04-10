<?php

//Exercise 1
function getSquareNumber($n): int{
  return $n * $n;
}
$array = array(10, 20, 30);
print_r(array_map("getSquareNumber", $array));
echo "<br/>";

//Exercise 2
function getStringPairCharacter($n): String{
  $new_n = strlen($n);
  return !($new_n & 1);
}
$array2 = array("hola", "mama", "hello", "mum");
print_r(array_filter($array2, "getStringPairCharacter"));
echo "<br/>";

//Exercise 3
function getSumPrimeNums($sum_prime, $n){  
  if($n / $n == 1 && $n != 1){
      $sum_prime += $n;
    }
    return $sum_prime;   
}
$array3 = array(1, 2, 5, 7);
print_r(array_reduce($array3, "getSumPrimeNums"));
?>