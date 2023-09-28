<?php

require './App/DNA.php';

$test = new School;
$test->add("tlos3r", 3);
$listStudents = $test->getAllStudent();
$listGrades = $test->grade(2);

// foreach ($listGrades as $key => $grade) {
//   print_r($grade);
// }

foreach ($listStudents as $key => $values) {
  echo "Class {$key} : ";
  foreach ((array) $values as $value) {
    echo "{$value} ";
  }
  echo "<br>";
}