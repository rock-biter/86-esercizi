<?php

function login($conn, $username, $password)
{

  include_once __DIR__ . '/session.php';

  $md5_password = md5($password);
  $stmt = $conn->prepare("SELECT `id`, `username` FROM `users` WHERE `username` = ? and `password` = ?");

  $stmt->bind_param('ss', $username, $md5_password);
  $stmt->execute();

  $result = $stmt->get_result();
  // $sql = "SELECT `id`, `username` FROM `users` WHERE `username` = '" . $username . "' and `password` = '" . $md5_password . "'";
  // $result = $conn->query($sql);

  $num_rows = $result->num_rows;

  if ($num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['userId'] = $row['id'];
    $_SESSION['username'] = $row['username'];
  } else {
    $_SESSION['userId'] = 0;
    $_SESSION['username'] = '';
  }
}

function getAllDepartments($conn)
{

  $stmt = $conn->prepare("SELECT * FROM `departments`");
  $stmt->execute();

  $result = $stmt->get_result();

  return $result;
}
