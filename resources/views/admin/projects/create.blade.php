@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Nuovo Progetto</h2>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary rounded-pill">
                    Annulla
                </a>
            </div>
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label fw-bold">Titolo Progetto</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Es: E-commerce Laravel" required>
                            </div>

                            <div class="col-md-6">
                                <label for="client" class="form-label fw-bold">Cliente</label>
                                <input type="text" class="form-control" id="client" name="client" placeholder="Nome azienda o privato">
                            </div>

                            <div class="col-md-6">
                                <label for="period" class="form-label fw-bold">Periodo</label>
                                <input type="text" class="form-control" id="period" name="period" placeholder="Es: Gennaio 2024 o 3 mesi">
                            </div>

                            <div class="col-md-6">
                                <label for="type" class="form-label fw-bold">Tipo di Progetto</label>
                                <select class="form-select" id="type" name="type">
                                    @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="summary" class="form-label fw-bold">Descrizione/Riassunto</label>
                                <textarea class="form-control" id="summary" name="summary" rows="5" placeholder="Descrivi il progetto..."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2">
                                    Salva Progetto
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