<!DOCTYPE html>
<?php

require_once __DIR__ . '/functions.php';

$length = isset($_GET['length']) ? $_GET['length'] : null;
var_dump($length);

if ($length !== null && is_numeric($length)) {

  $length = intval($length);
  $password = generaPassword($length);

  $message = "La password generata è: $password";
}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password generator</title>
</head>

<body>

  <header>
    <h1>Password generator</h1>
  </header>

  <main>

    <section>
      <div class="container">
        <form action="" method="GET">
          <input type="number" name="length" placeholder="0" min="6" max="32">
          <input type="submit" value="Genera">
        </form>
      </div>

      <div class="container">
        <h1>
          <?php echo isset($message) ? $message : '-- password --';  ?>
        </h1>
      </div>
    </section>

  </main>

</body>

</html>