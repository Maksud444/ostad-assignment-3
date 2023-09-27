<?php
// 4-Create a multidimensional array called $studentGrades to store the grades of three 
// students. Each student has grades for three subjects: Math, English, and Science. 
// Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = [
    ["Math" => 85, "English" => 78, "Science" => 90],
    ["Math" => 95, "English" => 88, "Science" => 92],
    ["Math" => 92, "English" => 85, "Science" => 88]
];

function calculateAverageGrade($grades) {
  $numSubjects = count($grades[0]);  
  $numStudents = count($grades);

  for ($i = 0; $i < $numStudents; $i++) {
      $totalGrade = 0;

      foreach ($grades[$i] as $subject => $grade) {
          $totalGrade += $grade;
      }

      $averageGrade = $totalGrade / $numSubjects;
      echo "Average grade for Student " . ($i + 1) . ": " . round($averageGrade, 2) . "\n";
  }
}

// Calculate and print average grades for each student
calculateAverageGrade($studentGrades);
?>