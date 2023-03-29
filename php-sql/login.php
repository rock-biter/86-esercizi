<?php

include_once __DIR__ . '/session.php';
include_once __DIR__ . '/conn.php';
include_once __DIR__ . '/functions.php';

$username = $_POST['username'] ?? null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

var_dump($password);
var_dump($username);

if ($password && $username) {

  login($conn, $username, $password);
}

var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>

  <div>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password">
      <p>

        <input type="submit" value="login">
      </p>
    </form>
  </div>

</body>

</html>