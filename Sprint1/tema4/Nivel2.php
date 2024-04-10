<?php
class PokerDice{
  
  public $dice;

  public function __constructor($dice){
    $this -> dice = $dice;
  }

  public function throw(){
    $random_num = array_rand($this -> dice);
    $this -> dice_face =  $this -> dice [$random_num];
    $this -> total_throws++;
  }

  public function shapeName(){
    echo "Ultima figura: ". $this -> dice_face . "<br>";
  }

  public function getTotalThrows(){
    echo "Total de tiradas: ". $this -> total_throws++. "<br>";
  }
}

//Verificación de los metodos de la clase
$dice = array("As", "K", "Q", "J", 7 , 8);
$game = new PokerDice($dice);
$game -> throw();
$game -> shapeName();

//Tirada de 5 dados a la vez
function throwFiveDices(){

  $dice = array("As", "K", "Q", "J", 7 , 8);
  $dice2 = array(1,2,3,4,5,6);

  //dado 1
  $game1 = new PokerDice();
  $game1 -> __Constructor($dice2);
  $game1 -> throw();
  $game1 -> shapeName();
  

  //dado 2
  $game2 = new PokerDice();
  $game2 -> __Constructor($dice2);
  $game2 -> throw();
  $game2 -> shapeName();
  

  //dado 3
  $game3 = new PokerDice();
  $game3 -> __Constructor($dice);
  $game3 -> throw();
  $game3 -> shapeName();

  //dado 4
  $game4 = new PokerDice();
  $game4 -> __Constructor($dice);
  $game4 -> throw();
  $game4 -> shapeName();

  //dado 5
  $game5 = new PokerDice();
  $game5 -> __Constructor($dice);
  $game5 -> throw();
  $game5 -> shapeName();
}

throwFiveDices();
$game -> getTotalThrows();

//prueba del getTotalThrows para ver si aumenta el total
throwFiveDices();
$game -> getTotalThrows();
?>