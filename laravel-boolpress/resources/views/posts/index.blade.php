@extends('layouts.app')

@section('content')
    @if(request()->session()->exists('message'))

        <div class="alert alert-primary" role="alert">
          {{ request()->session()->pull('message') }}
        </div>

        @endif
    <div class="container py-5">
      <div class="d-flex align-items-center">
        <h1 class="me-auto">Tutti i post</h1>

        <div>
          @if(request('trashed'))
            <a class="btn btn-sm btn-light" href="{{ route('posts.index') }}">Tutti i post</a>
          @else
            <a class="btn btn-sm btn-light" href="{{ route('posts.index',['trashed' => true]) }}">Cestino ({{ $num_of_trashed}})</a>
          @endif
          <a class="btn btn-sm btn-primary" href="{{ route('posts.create') }}">Nuovo post</a>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-striped table-inverse table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Categoria</th>
            <th>Tag</th>
            <th>Data creazione</th>
            <th>Data modifica</th>
            <th>Eliminato</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>
                  <a href="{{ route('posts.show',$post) }}">{{ $post->title }}</a>
                  <p>
                    <label for="">
                      {{ optional($post->user)->name }}
                    </label>
                  </p>
                </td>
                <td> {{ $post->category ? $post->category->name : '-' }} </td>
                <td>
                  {{-- @dump($post->ta) --}}
                  @forelse($post->tags()->orderBy('name','asc')->get() as $tag )
                    <span class="badge rounded-pill text-bg-light">{{ $tag->name }}</span>
                  @empty
                    -
                  @endforelse
                </td>
                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                <td>{{ $post->updated_at->format('d/m/Y') }}</td>
                <td>
                  {{ $post->trashed() ? $post->deleted_at->format('d/m/Y') : '' }}
                </td>
                <td>
                  <div class="d-flex ">
                    <a class="btn btn-sm btn-secondary" href="{{ route('posts.edit',$post) }}">Edit</a>
                    <form action="{{ route('posts.destroy',$post) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-sm btn-danger" type="submit" value="Elimina">
                    </form>
                    @if($post->trashed())
                    <form action="{{ route('posts.restore',$post) }}" method="POST">
                      @csrf
                      <input class="btn btn-sm btn-success" type="submit" value="Ripristina">
                    </form>
                    @endif
                  </div>
                </td>
              </tr>
          @empty
            <tr>
              <th colspan="7">Nessun post trovato</th>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
@endsection