<?php

define('DB_HOSTNAME', 'localhost:8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_lc_university');

$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn && $conn->connect_error) {
  echo "Errore di connessione: " . $conn->connect_error;
  exit();
}

// var_dump($conn);
