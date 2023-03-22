<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

  <div id="app">
    <section>
      <div class="container py-5">
        <h1 class="fs-1">{{ title }}</h1>
      </div>

      <div class="container py-5">

        <input @keyup.enter="saveTask" v-model="newTodo" class="form-control mb-2" type="text" name="todo" placeholder="New task" aria-label="default input example">

        <ul class="list-group">
          <li v-for="todo in todos" :key="todo" class="list-group-item">{{ todo }}</li>
        </ul>
      </div>
    </section>
  </div>

  <script src="./app.js"></script>
</body>

</html>