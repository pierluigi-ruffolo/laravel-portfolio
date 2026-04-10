@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Modifica Tipologia</h2>

    <div class="card p-4 shadow-sm">
        <form action="{{ route('admin.types.update', $type) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input value="{{$type->name}}" type="text" name="name" id="name" class="form-control" placeholder="Es. Front-end" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Descrizione opzionale...">{{$type->description}}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success">Salva</button>
                <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Annulla</a>
            </div>
        </form>
    </div>
</div>
@endsection