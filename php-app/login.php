<?php

// var_dump(__DIR__);

include __DIR__ . '/partials/template/header.php';

if (isset($_SESSION['user'])) {
  header('Location: ./admin.php');
}

var_dump($_POST);
$username = $_POST['username'] ?? false;
$password = $_POST['password'] ?? false;

if ($username && $password) {
  $_SESSION['user'] = $username;
  header('Location: ./admin.php');
}

?>

<main class="py-5">
  <div class="container">
    <h1>Login</h1>
  </div>
  <div class="container">
    <form action="" method="POST">
      <div class="mb-3">
        <div class="">
          <input type="text" class="form-control" name="username" id="staticEmail" placeholder="Username">
        </div>
      </div>
      <div class="mb-3 ">
        <div>
          <input type="password" class="form-control" name="password" id="inputPassword" placeholder="password">
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-primary mb-3">Login</button>
      </div>
    </form>
  </div>
</main>

<?php

include __DIR__ . '/partials/template/footer.php';
?>