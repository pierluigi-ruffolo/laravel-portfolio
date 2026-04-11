@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex align-items-center mb-4">
        <h2 class="fw-bold m-0">🛠️ Aggiungi Nuova Tecnologia</h2>
    </div>

    <div class="card border-0 shadow-sm rounded-4 p-4">
        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf


            <div class="mb-4">
                <label for="name" class="form-label fw-bold text-secondary">Nome</label>
                <input type="text" name="name" id="name" class="form-control border-2 rounded-3 shadow-sm" required>
            </div>


            <div class="mb-4">
                <label for="color" class="form-label fw-bold text-secondary">Colore Badge</label>
                <input type="color" name="color" id="color" class="form-control form-control-color border-2 rounded-3 shadow-sm w-100" style="height: 50px;" value="#0d6efd">
            </div>


            <div class="mt-5 d-flex gap-2">
                <button type="submit" class="btn btn-success px-4 rounded-pill fw-bold shadow-sm">
                    Salva Tecnologia
                </button>
                <a href="{{ route('admin.technologies.index') }}" class="btn btn-outline-secondary px-4 rounded-pill">
                    Annulla
                </a>
            </div>
        </form>
    </div>
</div>
@endsection