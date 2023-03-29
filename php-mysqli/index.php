<?php

include_once __DIR__ . '/session.php';
include_once __DIR__ . '/conn.php';
include_once __DIR__ . '/functions.php';

$user_id = $_SESSION['userId'] ?? null;
if (!$user_id) {
  header('Location: ./login.php');
}

$result = getAllDepartments($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dipartimenti</title>
</head>

<body>

  <header>
    <nav>
      <a href="./logout.php">Logout</a>
      <a href="./login.php">Login</a>
    </nav>
  </header>

  <h1>Università Bocciofila</h1>

  <?php
  if ($result && $result->num_rows > 0) :
    while ($row = $result->fetch_assoc()) :
  ?>
      <div>
        <?php echo $row['name'] ?>
      </div>
  <?php
    endwhile;
  endif;
  ?>
</body>

</html>