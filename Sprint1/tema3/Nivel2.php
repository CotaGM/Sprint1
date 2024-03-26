<?php
//Exercise 1 
$array_multipleX = array(2.5, 5, 7.5, 10, 12.5, 15);
$array_multipleY = array(1.5, 3, 4.5, 6, 7.5, 9);

$array_match = array_intersect($array_multipleX, $array_multipleY);
print_r($array_match);
echo "<br/>";

$array_fusion = array_merge($array_multipleX, $array_multipleY);
print_r($array_fusion);
echo "<br/>";

//Exercise 2
$php_grades = [
    "Paola" => [5, 7, 4, 8, 3], 
    "Carolina" => [8, 10, 10, 7, 9], 
    "Cristian" => [2, 5, 7, 4, 5], 
    "Alfonso" => [5, 5, 6, 5, 10], 
    "Andrea" => [2, 3, 3, 5, 7], 
];

function gradeAverageClass($php_grades): float{
    
    /*failed try:
    ¿Is not possible to do the calculation on the $php_grades array?
    Had to split the big array into individual ones to use the array_sum function
    
    $total_grades_class = count($php_grades);
    $sum_grades_class = array_sum($php_grades);
    $average_grades_class = $sum_grades_class / $total_grades_class ;
    echo "Promedio clase: $average_grades_class <br>";*/

    // individual calculation
    foreach($php_grades as $student => $individual_grades){ 
        $sum_grades_student = array_sum($individual_grades);
        $total_grades_student = count($individual_grades);
        $average_grades_student = $sum_grades_student / $total_grades_student;

        echo "Promedio del alumno $student: $average_grades_student <br>";
    
        $sum_grades_class += $sum_grades_student;
    }
    //Class calculation
    $number_of_students = count($php_grades);
    $average_grades_class =  $sum_grades_class / ($number_of_students * $total_grades_student);

    echo "Promedio de la clase PHP: $average_grades_class";
}      
gradeAverageClass($php_grades);
?>