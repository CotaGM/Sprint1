<?php
class PokerDice{

  public $dice;

  public function __construct($dice){
  $this -> dice = $dice;
  }

  public function throw(){
    $random_num = array_rand($this -> dice);
    $dice_face =  $this -> dice [$random_num];
    echo $dice_face;
  }
}
  $dice = ["As", "K", "Q", "J", 7 , 8];
  $dice1 = new PokerDice($dice);
  $dice1 -> throw();
?>