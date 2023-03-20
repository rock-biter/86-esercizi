<?php



$parole = ['lorem', 'ipsum', 'dolor', 'sit', 'amet'];
$parola_da_cercare = isset($_GET['parola']) ? $_GET['parola'] : null;

// var_dump($parola_da_cercare);

$trovata = in_array($parola_da_cercare, $parole);

// var_dump($trovata);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/app.css">
</head>

<body>

  <?php

  if ($trovata === true) :
  ?>

    <h2 class="<?php echo 'success'; ?>">La parola inserita è presente nell'array.</h2>

  <?php
  else :
  ?>
    <h2 class="<?php echo 'error'; ?>">Parola non trovata.</h2>
  <?php
  endif;

  ?>


  <form action="./index.php" method="GET">
    <input type="text" name="parola" placeholder="parola" value="<?php echo $parola_da_cercare; ?>">
    <input type="submit" value="Cerca">
  </form>

  <ul>
    <?php

    $animals = [
      "mammals" => ["cow", "pig", "horse", "dog"],
      "birds" => ["duck", "chicken"]
    ];


    foreach ($animals as $key => $value) :
      // var_dump($key);
      // var_dump($value);
    ?>
      <li><?php echo $key; ?>
        <ul>
          <?php
          foreach ($value as $animal) :
          ?>
            <li><?php echo $animal; ?></li>
          <?php
          endforeach;
          ?>

        </ul>
      </li>
    <?php
    endforeach;
    ?>

  </ul>



</body>

</html>