<?php
class NumberChecker2{
    public function __construct(private int $number){}

    public function isEven(): bool {
        return $this-> number%2 == 0;
    }
    public function isPositive($number): bool {
        return  $this-> number > 0;
    }
}
?>