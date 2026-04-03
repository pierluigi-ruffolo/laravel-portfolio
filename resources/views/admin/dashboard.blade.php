@extends('layouts.app')

@section('content')
<div class="container-fluid dashboard-container pb-5">

    <div class="row mb-4">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4 d-flex align-items-center justify-content-between welcome-banner">
                <div>
                    <h2 class="fw-bold mb-1">Bentornato, {{ Auth::user()->name }}! 👋</h2>
                    <p class="text-muted mb-0">Gestisci i tuoi contenuti da un unico posto.</p>
                </div>
                <div class="d-none d-md-block text-end">
                    <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
                        <i class="bi bi-calendar3 me-2 text-primary"></i> {{ date('d M Y') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="icon-shape bg-primary-subtle">
                        <i class="bi bi-folder2-open fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted mb-1 small uppercase fw-bold">Progetti</h6>
                        <h4 class="fw-bold mb-0">12</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
                <div class="d-flex align-items-center">
                    <div class="icon-shape bg-success-subtle">
                        <i class="bi bi-graph-up-arrow fs-3"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="text-muted mb-1 small uppercase fw-bold">Visite</h6>
                        <h4 class="fw-bold mb-0">1.2k</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="fw-bold mb-4 px-1">Azioni Rapide</h4>
    <div class="row g-4">

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 card-hover">
                <div class="card-body p-4 d-flex flex-column">
                    <i class="bi bi-rocket-takeoff fs-1 text-primary mb-3"></i>
                    <h5 class="fw-bold mb-2">Progetti</h5>
                    <p class="text-muted small">Crea e modifica i lavori che i visitatori vedranno sul sito.</p>
                    <div class="mt-auto pt-4">
                        <a href="#" class="btn btn-primary w-100 rounded-pill py-2">
                            Gestisci <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 card-hover bg-dark text-white">
                <div class="card-body p-4 d-flex flex-column">
                    <i class="bi bi-person-gear fs-1 text-info mb-3"></i>
                    <h5 class="fw-bold mb-2">Mio Profilo</h5>
                    <p class="text-white-50 small">Aggiorna le tue info e le tue impostazioni di sicurezza.</p>
                    <div class="mt-auto pt-4">
                        <a href="{{ route('profile.edit') }}" class="btn btn-info w-100 rounded-pill py-2 text-white fw-bold">
                            Impostazioni <i class="bi bi-gear ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 rounded-4 card-hover border-start border-5 border-info">
                <div class="card-body p-4 d-flex flex-column">
                    <i class="bi bi-globe2 fs-1 text-info mb-3"></i>
                    <h5 class="fw-bold mb-2">Sito Pubblico</h5>
                    <p class="text-muted small">Vedi l'anteprima del tuo portfolio come un utente esterno.</p>
                    <div class="mt-auto pt-4">
                        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-info w-100 rounded-pill py-2 fw-bold">
                            Visualizza <i class="bi bi-box-arrow-up-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection