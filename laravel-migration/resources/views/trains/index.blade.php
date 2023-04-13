@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Elenco dei treni in partenza</h1>
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