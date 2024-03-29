@extends('layouts.app')

@section('content')

<div>
  <div class="container">
    <div class="row">
      <div class="col-auto ms-auto">
        <a class="btn btn-primary" href="{{ route('pastas.create') }}">
          Nuova pasta
        </a>
        <form action="{{ route('pastas.destroy.all') }}" method="POST">
          @csrf
          @method('DELETE')
          <input class="btn btn-danger btn-sm" type="submit" value="Elimina tutte">
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Thumb</th>
          <th scope="col">id</th>
          <th scope="col">Titolo</th>
          
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        @foreach ($pastas as $pasta)
          <tr>
            <td>
              <img src="{{ $pasta->src }}" alt="" height="50">
            </td>
            <th scope="row">
              {{ $pasta->id }}
            </th>
            <td>
              <a href="{{ route('pastas.show',$pasta->id) }}">
                {{ $pasta->title }}
              </a>
            </td>
            
            <td>
              <div class="d-flex">
                <a class="btn btn-secondary btn-sm" href="{{ route('pastas.edit',$pasta) }}">Edit</a>
                <form action="{{ route('pastas.destroy',$pasta) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
              </div>
              

            </td>
          </tr>
              
        @endforeach
        
        
      </tbody>
    </table>
      <div class="row">
          {{-- @dump($paste) --}}
          
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