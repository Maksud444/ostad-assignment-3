<?php
// 3-Create an array called $grades with the following values: 85, 92, 78, 88, 95. 
// Write a PHP function which takes "$grades" as an argument to sort the array in 
// descending order and print the sorted grades as array.

$grades = [85, 92, 78, 88, 95];

function avGrade($grades){
 rsort($grades);
 return $grades;
}

$sortGrade = avGrade($grades);
print_r($sortGrade);
?>