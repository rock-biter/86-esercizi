@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $post->title }}</h1>
                <p>/{{ $post->slug }}</p>
            </div>

            <div>
                <a class="btn btn-sm btn-secondary" href="{{ route('posts.edit',$post) }}">Modifica</a>
            </div>
            
        </div>
    </div>
    <div class="container">
        <p>
            {{ $post->content }}
        </p>
    </div>
@endsection