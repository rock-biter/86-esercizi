<?php

// leggiamo il contenuto del file todo.json
$todo_string = file_get_contents('./todo.json');


$todo_list = json_decode($todo_string, true);

// $response = [
//   'results' => $todo_list,
//   'success' => true
// ];


$new_todo = isset($_POST['todo']) ? $_POST['todo'] : null;

if ($new_todo !== null) {
  $todo_list[] = $new_todo;
}

$new_array_string = json_encode($todo_list);
file_put_contents('./todo.json', $new_array_string);


//impostiamo l'header Content-Type
header('Content-Type: application/json');
// stampiamo la stringa json
echo $new_array_string;

// stampiamo la response
// echo json_encode($response);
