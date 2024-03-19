@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <header>
        <h1>{{ $post->title }}</h1>
    </header>


    <div class="clearfix">
        @if ($post->image)
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="me-2 float-start">
        @endif
        <p>{{ $post->content }}</p>
        <div>
            <strong>Creato il:</strong> {{ $post->created_at }}
            <strong>Ultima modifica:</strong> {{ $post->updated_at }}
        </div>
    </div>

    <hr>

    <footer class="d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary ">
            <i class="fas fa-arrow-left me-1"></i>Torna indietro
        </a>
        <div class="d-flex justify-content-between gap-2">
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                <i class="fas fa-pencil me-2"></i> modifica
            </a>

            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @CSRF
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-can me-2"></i> Elimina</button>
            </form>
        </div>
    </footer>

@endsection
