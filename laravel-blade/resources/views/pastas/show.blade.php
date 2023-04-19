@extends('layouts.app')

@section('content')

<div class="container">
  <h1>{{ $pasta->title }}</h1>
  <a class="btn btn-secondary" href="{{ route('pastas.edit',$pasta) }}">Modifica</a>
</div>

<div class="container">
  <img src="{{ $pasta->src }}" alt="">
  <p>{!! $pasta->description !!}</p>
</div>

<div class="container">
  <ul class="list-group">
    <li class="list-group-item">Cottura: {{ $pasta->cooking_time }}</li>
    <li class="list-group-item">Tipologia: {{ $pasta->type }}</li>
    <li class="list-group-item">Peso: {{ $pasta->weight }}</li>
  </ul>
</div>
    
@endsection