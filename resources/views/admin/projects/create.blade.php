@extends('layouts.app')

@section('title', 'Crea Progetto')

@section('content')

    <header>
        <h1>Nuovo Progetto</h1>
    </header>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @CSRF

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nome del progetto..."
                        value="{{ old('title', '') }}">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="content" class="form-label">Descrizione del progetto</label>
                    <textarea class="form-control" name="content" id="content" rows="20">
                        {{ old('content', '') }}
                    </textarea>
                </div>
            </div>
            <div class="col-11">
                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="url" class="form-control" name="image" id="image"
                        placeholder="http:// o hattps://" value="{{ old('image', '') }}">
                </div>
            </div>
            <div class="col-1">
                <img src="https://marcolanci.it/boolean/assets/placeholder.png" alt="immagine" id="preview"
                    class="img-fluid">
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between my-3">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna indietro</a>

            <div class="d-flex align-items-center gap-2">
                <button type="reset" class="btn btn-secondaty"><i class="fa-solid fa-eraser"></i> Svuota i campi</button>
                <button type="submit" class="btn btn-success "><i class="fas fa-floppy-disk me-2"></i>Salva</button>
            </div>
        </div>
    </form>

@endsection
