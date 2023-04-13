@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Elenco dei treni in partenza</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa minus fugit earum molestiae eos repellendus incidunt doloremque! Nisi illo ipsa culpa? Iusto magni corrupti maxime alias quia quidem accusantium fugiat.</p>
    </div>

    <div class="container">
      <table>
        <tbody>
          @foreach ($trains as $train)
              <tr>
                <td>{{ $train->id }}</td>
                <td>{{ $train->departure_station}}</td>
                <td>{{ $train->arrival_station}}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection