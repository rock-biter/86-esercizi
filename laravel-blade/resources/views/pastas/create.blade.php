@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Nuova Pasta</h1>
  </div>

  <div class="container">
    <form action="{{ route('pastas.store') }}" method="POST">

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" >
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type" >
      </div>

      <div class="mb-3">
        <label for="src" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control" id="src" name="src" >
      </div>

      <div class="mb-3">
        <label for="cooking-time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" id="cooking-time" name="cooking_time" >
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" id="weight" name="weight" >
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Salva</button>


    </form>
  </div>
    
@endsection