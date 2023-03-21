<?php

// var_dump($_GET);

$filter_parking = isset($_GET['parking']) ? true : false;
// var_dump($filter_parking);

$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

// 
// function hasParking($hotel)
// {
//   return $hotel['parking'];
// }

// if ($filter_parking === true) {

//   $hotels = array_filter($hotels, 'hasParking');
//   $hotels = array_filter($hotels, fn($hotel) => $hotel['parking']); / versione con arrow function
// }

$filtered_hotels = [];

if ($filter_parking === true) {

  foreach ($hotels as $hotel) {
    if ($hotel['parking'] === true) {
      $filtered_hotels[] = $hotel;
    }
  }
} else {
  $filtered_hotels = $hotels;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>



  <section class="py-5">
    <div class="container">
      <h1>
        Hotels
      </h1>
    </div>
    <div class="container py-4">
      <div class="row">
        <div class="col-auto ms-auto">
          <form method="GET" class="row g-3 align-items-center">
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" <?= $filter_parking === true ? 'checked' : ''; ?> type="checkbox" name="parking" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Parcheggio
                </label>
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Filtra</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza centro</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($filtered_hotels as $hotel) :
          ?>
            <tr>
              <td><?php echo $hotel['name']; ?></td>
              <td><?= $hotel['description']; ?></td>
              <td><?= $hotel['parking'] === true ? 'Si' : 'No'; ?></td>
              <td>
                <?php
                for ($i = 0; $i < $hotel['vote']; $i++) {
                ?>
                  <svg style="width: 24px;" class="d-inline-block text-warning" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                  </svg>
                <?php
                }
                ?>
              </td>
              <td><?= $hotel['distance_to_center']; ?> km</td>
            </tr>
          <?php
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <!-- <ul>
    <?php

    foreach ($hotels as $hotel) :
    ?>
      <li>
        <h2><?php echo $hotel['name']; ?></h2>
        <p><?= $hotel['description']; ?></p>
        <p>Parcheggio: <?= $hotel['parking'] === true ? 'Si' : 'No'; ?></p>
        <p> <?= $hotel['vote']; ?>/5</p>
        <p><?= $hotel['distance_to_center']; ?> km</p>
      </li>
    <?php
    endforeach;
    ?>

  </ul> -->

</body>

</html>