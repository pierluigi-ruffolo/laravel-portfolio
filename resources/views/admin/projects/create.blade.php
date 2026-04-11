@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold m-0">🚀 Nuovo Progetto</h2>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                    <i class="bi bi-arrow-left"></i> Annulla
                </a>
            </div>
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">
                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-12">
                                <label for="title" class="form-label fw-bold">Titolo Progetto</label>
                                <input type="text" class="form-control form-control-lg border-2" id="title" name="title" placeholder="Es: E-commerce Laravel" required>
                            </div>
                            <div class="col-md-6">
                                <label for="client" class="form-label fw-bold">Cliente</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-person text-muted"></i></span>
                                    <input type="text" class="form-control border-start-0" id="client" name="client" placeholder="Nome azienda">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="period" class="form-label fw-bold">Periodo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0"><i class="bi bi-calendar3 text-muted"></i></span>
                                    <input type="text" class="form-control border-start-0" id="period" name="period" placeholder="Es: Gennaio 2024">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="type_id" class="form-label fw-bold">Tipo di Progetto</label>
                                <select class="form-select border-2" id="type_id" name="type_id">
                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
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
                                                    id="tag-{{$technology->id}}">
                                                <label class="form-check-label fw-semibold text-dark ps-1" for="tag-{{$technology->id}}">
                                                    {{$technology->name}}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="summary" class="form-label fw-bold">Descrizione/Riassunto</label>
                                <textarea class="form-control" id="summary" name="summary" rows="6" placeholder="Descrivi il progetto nel dettaglio..."></textarea>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm py-3 fw-bold">
                                    Crea Progetto
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