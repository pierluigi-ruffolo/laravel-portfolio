@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> Lista Progetti
                </a>

                <div class="d-flex gap-2">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning text-white rounded-pill px-3">
                        <i class="bi bi-pencil me-1"></i> Modifica
                    </a>

                    <button type="button" class="btn btn-danger rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-trash me-1"></i> Elimina
                    </button>
                </div>
            </div>
            <div class="border-bottom pb-3 mb-4">
                <h1 class="display-5 fw-bold text-dark">{{ $project->title }}</h1>
                <div class="d-flex gap-3 text-muted">
                    <span><strong>Tipo:</strong> {{ $project->type['name'] }}</span>
                    <span>|</span>
                    <span><strong>Cliente:</strong> {{ $project->client }}</span>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h5 class="text-uppercase small fw-bold text-secondary mb-3">Descrizione del progetto</h5>
                    <p class="fs-5 lh-base text-dark">
                        {{ $project->summary }}
                    </p>
                </div>
            </div>

            <div class="bg-light p-4 rounded-3">
                <div class="row">
                    <div class="col-6">
                        <small class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem;">Periodo di esecuzione</small>
                        <p class="mb-0">{{ $project->period }}</p>
                    </div>
                    <div class="col-6 text-end">
                        <small class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem;">Slug Identificativo</small>
                        <code class="text-primary">{{ $project->slug }}</code>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow border-0">

            <div class="modal-header border-0 pb-0">
                <h1 class="modal-title fs-5 fw-bold text-dark" id="exampleModalLabel">Conferma Eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body py-4">
                <p class="text-muted mb-0">
                    Sei sicuro di voler eliminare definitivamente questo progetto? <br>
                    <span class="text-danger fw-semibold">L'azione non può essere annullata.</span>
                </p>
            </div>

            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Annulla</button>

                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger rounded-pill px-4">
                        Elimina progetto
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection