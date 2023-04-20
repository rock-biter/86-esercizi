@extends('layouts.app')

@section('content')
    <div class="container py-5">
      <div class="d-flex align-items-center">
        <h1 class="me-auto">Tutti i post</h1>

        <div>
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
            <th>Slug</th>
            <th>Data creazione</th>
            <th>Data modifica</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>
                  <a href="{{ route('posts.show',$post) }}">{{ $post->title }}</a>
                </td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                  <div class="d-flex ">
                    <a class="btn btn-sm btn-secondary" href="{{ route('posts.edit',$post) }}">Edit</a>
                  </div>
                </td>
              </tr>
          @empty
            <tr>
              <th colspan="6">Nessun post trovato</th>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
@endsection