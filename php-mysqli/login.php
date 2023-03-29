<?php
include_once __DIR__ . '/session.php';
include_once __DIR__ . '/conn.php';
include_once __DIR__ . '/functions.php';



$password = $_POST['password'] ?? null;
$username = $_POST['username'] ?? null;

if ($password && $username) {
  login($conn, $username, $password);
}

if (!empty($_SESSION['userId']) && $_SESSION['userId'] > 0) {
  // user is logged in
  header('Location: ./index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>

<body>

  <form action="" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password">
    <input type="submit" value="login">
  </form>

</body>

</html>