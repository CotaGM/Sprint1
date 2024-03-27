<?php
class PokerDice{

  public $dice = ["As", "K", "Q", "J", 7 , 8];
  public $dice_face;
  public $total_throws;
 
  public function throw(){
    $random_num = array_rand($this -> dice);
    $this -> dice_face =  $this -> dice [$random_num];
    $this -> total_throws++;
  }
  public function shapeName(){
    echo "Ultima figura: ". $this -> dice_face . "<br>";
  }
  public function getTotalThrows(){
    echo "Total tiradas: ". $this -> total_throws. "<br>";
  }
}
//Verificación de los metodos de la clase
$dice1 = new PokerDice();
$dice1 -> throw();
$dice1 -> shapeName();
$dice1 -> getTotalThrows();

//Tirada de 5 dados a la vez
function throwFiveDices(){
  $dice2 = new PokerDice();
    for ($i = 0; $i < 5; $i++){
      $dice2 -> throw();
      echo $dice2 -> shapeName();
    }
  echo $dice2 -> getTotalThrows();
}
throwFiveDices();
?>