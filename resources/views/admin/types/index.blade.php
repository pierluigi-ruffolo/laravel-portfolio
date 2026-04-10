@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0 text-dark">Tipologie Progetto</h2>
            <p class="text-muted small">Gestisci le categorie disponibili per i tuoi lavori</p>
        </div>
        <a href="{{ route('admin.types.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="bi bi-plus-lg me-2"></i>Nuova Tipologia
        </a>
    </div>
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 text-secondary text-uppercase small fw-bold" style="width: 80px;">ID</th>
                            <th class="py-3 text-secondary text-uppercase small fw-bold" style="width: 200px;">Nome</th>
                            <th class="py-3 text-secondary text-uppercase small fw-bold">Descrizione</th>
                            <th class="pe-4 py-3 text-end text-secondary text-uppercase small fw-bold" style="width: 150px;">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $type)
                        <tr>
                            <td class="ps-4 text-muted fw-medium">#{{ $type->id }}</td>
                            <td>
                                <span class="badge bg-secondary-subtle text-secondary border px-3 py-2 rounded-pill">
                                    {{ $type->name }}
                                </span>
                            </td>
                            <td>
                                <p class="mb-0 text-muted small px-2">
                                    {{ $type->description ? $type->description : "Nessuna descrizione fornita."}}
                                </p>
                            </td>
                            <td class="pe-4 text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm text-warning border-0" title="Modifica">
                                        <i class="bi bi-pencil-square fs-5"></i>
                                    </a>

                                    <button type="button" class="btn btn-sm text-danger border-0" data-bs-toggle="modal" data-bs-target="#modal-{{$type->id}}" title="Elimina">
                                        <i class="bi bi-trash3 fs-5"></i>
                                    </button>
                                </div>
                                <!-- modale -->
                                <div class="modal fade" id="modal-{{$type->id}}" tabindex="-1" aria-labelledby="modalLabel-{{$type->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content shadow border-0">

                                            <div class="modal-header border-0 pb-0">
                                                <h1 class="modal-title fs-5 fw-bold text-dark" id="modalLabel-{{$type->id}}">Conferma Eliminazione</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-4">
                                                <p class="text-muted mb-0">
                                                    Sei sicuro di voler eliminare definitivamente <strong>{{$type->name}}</strong>? <br>
                                                    <span class="text-danger fw-semibold">L'azione non può essere annullata.</span>
                                                </p>
                                            </div>
                                            <div class="modal-footer border-0 pt-0">
                                                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Annulla</button>
                                                <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger border-0" title="Elimina">
                                                        Elimina definitivamente
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- fine modale -->
                            </td>
                        </tr>
                        @endForeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection