 <?php

  // var_dump(__DIR__);

  include __DIR__ . '/partials/template/header.php';

  // consiglio password generator
  $text = 'abcfghilm';

  $pass = $text[5] . $text[2];


  ?>

 <main>
   <div class="container">
     <h1>Benvenuti nel nosto sito: <?= $pass ?></h1>
   </div>
 </main>

 <?php

  include __DIR__ . '/partials/template/footer.php';
  ?>