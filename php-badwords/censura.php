<?php


$data = $_GET;

var_dump($data);


$paragrafo = isset($_GET['paragrafo']) ? $_GET['paragrafo'] : '';
// $parola = false ?: 'no parola';
// $parola = false ?: 'no parola';
$parola = $_GET['parola'] ?? '';

$paragrafo_censurato = str_replace($parola, '***', $paragrafo);

var_dump($paragrafo);
var_dump($parola);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teesto censurato</title>
</head>

<body>

  <?php
  if (strlen($paragrafo) > 0) {
  ?>
    <div>
      <p>
        <?php echo $paragrafo; ?>
      </p>
      <p>
        Il paragrafo originale è lungo: <strong> <?php echo strlen($paragrafo); ?></strong>.
      </p>
    </div>
  <?php
  } else {

    echo 'Nessun paragrafo da censurare';
  }



  if (strlen($parola) > 0) {
  ?>
    <div>
      <p>
        <?php echo $paragrafo_censurato; ?>
      </p>
      <p>
        <strong> <?php echo 'Il paragrafo censurato è lungo: ' . strlen($paragrafo_censurato); ?></strong>.
      </p>
    </div>
  <?php
  } else {
  ?>
    <p>Nessana parola da censurare.</p>
  <?php
  }

  ?>




  <!--  -->

</body>

</html>