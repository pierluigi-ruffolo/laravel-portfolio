@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <header class="d-flex justify-content-between align-items-center my-4">
        <h2 class="fs-4 text-secondary mb-0">
            {{ __('Dashboard Admin') }}
        </h2>
        <span class="badge bg-primary px-3 py-2">
            Loggato come: {{ Auth::user()->name }}
        </span>
    </header>

    <div class="row justify-content-center g-4">
        <div class="col-12 col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">🚀 Progetti</h5>
                    <p class="card-text text-muted">Visualizza, crea e modifica i tuoi lavori nel portfolio.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn btn-primary w-100">Gestisci Progetti</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">👤 Il mio Profilo</h5>
                    <p class="card-text text-muted">Aggiorna le tue informazioni personali o cambia password.</p>
                    <div class="mt-auto">
                        <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary w-100">Modifica Profilo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection