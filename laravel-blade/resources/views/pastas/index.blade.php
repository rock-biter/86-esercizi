@extends('layouts.app')

@section('content')

<div>
  <div class="container">
      <div class="row">
          {{-- @dump($paste) --}}
          @foreach ($pastas as $pasta)
          
              <div class="col-4">
                <a href="{{ route('pastas.show',$pasta->id) }}">
                  <img src="{{ $pasta->src }}" alt="">
                  <h3>{{ $pasta->title }}</h3>
                </a>
              </div>
              
          @endforeach
      </div>
  </div>
</div>

<script>

  let name = "Gianluca"
  let lastName = 'Lomarco'

  let persona = {
    name: name,
    lastName: lastName
  }

  let persona2 = {
    name,
    lastName
  }


</script>
    
@endsection