@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-4">
                <a href="{{ route('admin.projects.index') }}" class="text-decoration-none text-secondary">
                    <i class="bi bi-arrow-left"></i> Torna alla lista
                </a>
            </div>

            <div class="border-bottom pb-3 mb-4">
                <h1 class="display-5 fw-bold text-dark">{{ $project->title }}</h1>
                <div class="d-flex gap-3 text-muted">
                    <span><strong>Tipo:</strong> {{ $project->type }}</span>
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
@endsection