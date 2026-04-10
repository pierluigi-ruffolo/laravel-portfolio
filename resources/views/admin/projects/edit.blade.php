@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Modifica Progetto</h2>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                    Annulla
                </a>
            </div>
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label fw-bold">Titolo Progetto</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="client" class="form-label fw-bold">Cliente</label>
                                <input type="text" class="form-control" id="client" name="client" value="{{$project->client}}" placeholder="Nome azienda o privato">
                            </div>
                            <div class="col-md-6">
                                <label for="period" class="form-label fw-bold">Periodo</label>
                                <input type="text" class="form-control" id="period" name="period" value="{{$project->period}}" placeholder="Es: Gennaio 2024 o 3 mesi">
                            </div>

                            <div class="col-md-12">
                                <label for="type" class="form-label fw-bold">Tipo di Progetto</label>
                                <select class="form-select" id="type" name="type">
                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                                        {{$type->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label d-block fw-bold mb-2 text-secondary text-uppercase" style="font-size: 0.75rem; letter-spacing: 1px;">
                                    Tecnologie utilizzate
                                </label>
                                <div class="p-4 border border-light-subtle rounded-4 bg-light shadow-sm">
                                    <div class="row g-3">
                                        @foreach($technologies as $technology)
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <div class="form-check custom-checkbox">
                                                <input class="form-check-input shadow-none border-secondary-subtle"
                                                    type="checkbox"
                                                    name="technologies[]"
                                                    value="{{$technology->id}}"
                                                    id="tag-{{$technology->id}}"
                                                    {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                                                <label class="form-check-label fw-semibold text-dark ps-1" for="tag-{{$technology->id}}" style="cursor: pointer; font-size: 0.9rem;">
                                                    {{$technology->name}}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label for="summary" class="form-label fw-bold">Descrizione/Riassunto</label>
                                <textarea class="form-control" id="summary" name="summary" rows="5" placeholder="Descrivi il progetto...">{{$project->summary}}</textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold shadow-sm">
                                    Aggiorna Progetto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection