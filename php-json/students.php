<?php

$string = file_get_contents('./students.json');

$students = json_decode($string, true);


$new_student = [
  'name' => 'Mimmo',
  'last_name' => 'Pass'
];

array_push($students, $new_student);
$students_json = json_encode($students);

file_put_contents('./students.json', $students_json);

// var_dump($students);

header('Content-Type: application/json');

echo $students_json;
