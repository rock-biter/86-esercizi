@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>{{ $post->title }} 
                    @if($post->category)
                        <span class="badge rounded-pill bg-warning">{{ $post->category->name }}</span>
                    @else
                        <span class="badge rounded-pill bg-secondary">Nessuna categoria</span>
                    @endif
                </h1>
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
    <div class="container pb-5">
        <p>
            {{ $post->content }}
        </p>
    </div>

    <div class="container">
        <h2>Articoli correlati</h2>
        @if($post->category)
        <ul>
            @foreach($post->category->posts as $related_post)
                <li>
                    <a href="{{ route('posts.show',$related_post)}}">
                        {{ $related_post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        @else
            nessun articolo correlato
        @endif
    </div>
@endsection