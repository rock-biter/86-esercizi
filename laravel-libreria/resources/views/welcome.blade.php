@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @forelse ($books as $book)
            <div class="col-3">
                <h3>{{ $book->title }}</h3>
                <p>{{ $book->author }}</p>
                <span>
                    Numero di pagine: {{ $book->pages }}
                </span>
            </div>
        @empty
            
        @endforelse

        <div class="col-12">
            
        </div>
    </div>

</div>
@endsection