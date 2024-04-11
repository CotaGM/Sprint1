<?php
class NumberChecker  {
    public function __construct(){}


    public function isEven($number): bool {
        return $number%2 == 0;
    }
    public function isPositive($number): bool {
        return $number > 0;
    }
}
?>