@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestione Progetti</h2>
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary rounded-pill px-3">
            <i class="bi bi-plus-lg me-1"></i> Nuovo Progetto
        </a>
    </div>
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-secondary">
                        <tr>
                            <th class="ps-4">ID</th>
                            <th>Titolo</th>
                            <th>Cliente</th>
                            <th>Periodo</th>
                            <th>Tipo</th>
                            <th class="text-end pe-4">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        @php
                        $type = "";
                        if ($project->type === "Front-end") {
                        $type = "bg-info-subtle text-info";
                        } else if ($project->type === "Back-end") {
                        $type = "bg-danger-subtle text-danger";
                        } else {
                        $type = "bg-success-subtle text-success";
                        }
                        @endphp

                        <tr>
                            <td class="ps-4 text-muted">{{$project->id}}</td>
                            <td>
                                <div class="fw-bold text-dark">{{$project->title}}</div>
                                <small class="text-muted">{{$project->slug}}</small>
                            </td>
                            <td>{{$project->client}}</td>
                            <td>{{$project->period}}</td>
                            <td><span class="badge {{$type}}">{{$project->type}}</span></td>
                            <td class="text-end pe-4">
                                <div class="btn-group shadow-sm rounded">
                                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-sm btn-outline-secondary" title="Vedi"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-sm btn-outline-secondary" title="Modifica"><i class="bi bi-pencil"></i></a>

                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$project->id}}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-{{$project->id}}" tabindex="-1" aria-labelledby="modalLabel-{{$project->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content shadow border-0">

                                    <div class="modal-header border-0 pb-0">
                                        <h1 class="modal-title fs-5 fw-bold text-dark" id="modalLabel-{{$project->id}}">Conferma Eliminazione</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body py-4">
                                        <p class="text-muted mb-0">
                                            Sei sicuro di voler eliminare definitivamente <strong>{{$project->title}}</strong>? <br>
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection