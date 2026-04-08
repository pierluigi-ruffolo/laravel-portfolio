@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestione Progetti</h2>
        <a href="#" class="btn btn-primary rounded-pill px-3">
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
                                    <a href="#" class="btn btn-sm btn-outline-secondary" title="Modifica"><i class="bi bi-pencil"></i></a>
                                    <button class="btn btn-sm btn-outline-danger" title="Elimina"><i class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection