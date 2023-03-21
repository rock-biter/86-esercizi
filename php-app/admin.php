<?php


include __DIR__ . '/partials/template/header.php';

if (!isset($_SESSION['user'])) {
  header('Location: ./login.php');
}

?>

<main class="py-5">
  <div class="container">
    <h1>Benvenuto admin</h1>
  </div>
</main>

<?php

include __DIR__ . '/partials/template/footer.php';
