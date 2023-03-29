<?php


function login($conn, $username, $password)
{

  include_once __DIR__ . '/session.php';

  $md5_password = md5($password);

  var_dump($md5_password);

  $stmt = $conn->prepare("SELECT `id`, `username` FROM `users` WHERE `username` = ? AND `password` = ?;");
  $stmt->bind_param('ss', $username, $md5_password);

  $stmt->execute();

  $result = $stmt->get_result();
  // $sql = "SELECT `id`, `username` FROM `users` WHERE `username` = '" . $username . "' and `password` = '" . $md5_password . "'";

  // $result = $conn->query($sql);

  $num_rows = $result->num_rows;

  if ($num_rows > 0) {
    // l'utente è stato trovato
    $row = $result->fetch_assoc();
    $u_name = $row['username'];
    $u_id = $row['id'];

    $_SESSION['username'] = $u_name;
    $_SESSION['user_id'] = $u_id;
  } else {
    // l'utente non è stato trovato
    $_SESSION['username'] = '';
    $_SESSION['user_id'] = 0;
  }
}
