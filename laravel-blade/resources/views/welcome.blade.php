@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <h2>
            ciao {{ $name }}
        </h2>
    </div>
    <div class="container">
        <div class="row">
            {{-- @dump($paste) --}}
            @foreach ($paste as $pasta)
            
                <div class="col-4">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <h3>{{ $pasta['titolo'] }}</h3>
                </div>
                
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('page-title',$page_title)


        

