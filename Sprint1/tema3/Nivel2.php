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
    "Paola" => [5, 7, 4, 8, 3, 10], 
    "Carolina" => [8, 10, 10, 7, 9, 10], 
    "Cristian" => [2, 5, 7, 4, 5, 8], 
    "Alfonso" => [5, 5, 6, 5, 10, 7], 
    "Andrea" => [2, 3, 3, 5, 7, 7], 
];

function gradeAverageStudent($php_grades): float{
    $total_students = count($php_grades);
    $total_notas_clase = 0;
    
    foreach($php_grades as $student => $individual_grades){
        $sum_grades = array_sum($individual_grades);
        $total_grades = count($individual_grades);
        $grade_average_student = $sum_grades / $total_grades;

        echo "Promedio del alumno $student: $grade_average_student <br>";

        $total_class += $sum_grades;
    }
    $average_class = $total_class / ($total_students * $total_grades);
    echo "Promedio clase: $average_class";
}      
gradeAverageStudent($php_grades);
?>