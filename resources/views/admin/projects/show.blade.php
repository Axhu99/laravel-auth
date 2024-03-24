@extends('layouts.app')

@section('title', 'Project')

@section('content')

    <header>
        <h1>{{ $project->title }}</h1>
    </header>


    <div class="clearfix">
        @if ($project->image)
            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="me-2 float-start">
        @endif
        <p>{{ $project->content }}</p>
        <div>
            <strong>Creato il:</strong> {{ $project->getFormattedDate('created_at', 'd-m-Y H:i') }}
            <strong>Ultima modifica:</strong> {{ $project->getFormattedDate('updated_at', 'd-m-Y H:i') }}
        </div>
    </div>

    <hr>

    <footer class="d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary ">
            <i class="fas fa-arrow-left me-1"></i>Torna indietro
        </a>
        <div class="d-flex justify-content-between gap-2">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-light">
                <i class="fas fa-pencil me-2"></i> modifica
            </a>

            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form">
                @CSRF
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-can me-2"></i> Elimina</button>
            </form>
        </div>
    </footer>

@endsection

@section('scripts')
    @vite('resources/js/delete.confirmation.js')
@endsection
