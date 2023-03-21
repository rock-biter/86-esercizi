<?php

// var_dump(__DIR__ . '/../vars.php');
require_once __DIR__ . '/../session.php';

include __DIR__ . '/../vars.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#"><?= $app_name; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <?php

            foreach ($links as $link) {
            ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= $link['href']; ?>"><?= $link['text'] ?></a>
              </li>
            <?php
            }

            ?>

          </ul>
          <ul class="navbar-nav">
            <?php

            if (isset($_SESSION['user'])) {
            ?>
              <li class="nav-item">
                <span class="nav-link" aria-current="page"><?= $_SESSION['user'] ?><span>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./logout.php">Logout</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./login.php">Login</a>
              </li>
            <?php
            }

            ?>


          </ul>
        </div>
      </div>
    </nav>
  </header>