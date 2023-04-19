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
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" >
        @error('title')
          {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select @error('type') is-invalid @enderror" name="type" id="type" aria-label="Default select example">
          <option >Seleziona una tipologia</option>
          @foreach($types as $key => $value)
            <option @selected( old('type') == $key ) value="{{$key}}">{{ $value }}</option>
          @endforeach
          {{-- <option @selected( old('type') == 'cortissima' ) value="cortissima">Cortissima</option>
          <option @selected( old('type') == 'corta' ) value="corta">Corta</option>
          <option @selected( old('type') == 'lunga' ) value="lunga">Lunga</option>
          <option @selected( old('type') == 'brodo' ) value="brodo">Brodo</option> --}}
        </select>
        {{-- <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}" > --}}
        @error('type')
          {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="src" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control @error('src') is-invalid @enderror" id="src" name="src" value="{{ old('src')}}" >
        @error('src')
          {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="cooking-time" class="form-label">Tempo di cottura</label>
        <input type="text" class="form-control" id="cooking-time" name="cooking_time" value="{{ old('cooking_time')}}" >
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" >
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Salva</button>


    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
    
@endsection