@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $post->title }}</h1>
                <p>/{{ $post->slug }}</p>
            </div>

            <div class="d-flex">
                <a class="btn btn-sm btn-secondary" href="{{ route('posts.edit',$post) }}">Modifica</a>
                @if($post->trashed())
                    <form action="{{ route('posts.restore',$post) }}" method="POST">
                      @csrf
                      <input class="btn btn-sm btn-success" type="submit" value="Ripristina">
                    </form>
                @endif
            </div>
            
        </div>
    </div>
    <div class="container">
        <p>
            {{ $post->content }}
        </p>
    </div>
@endsection