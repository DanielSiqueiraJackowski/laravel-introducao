@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-light p-3 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="m-0">Novo Curso</h1>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary btn-sm">Voltar para Disciplinas</a>
    </div>

    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="nome" class="form-control" placeholder="nome do curso">
        </div>
        <div class="mb-3">
            <input type="number" name="duracao" class="form-control" placeholder="duração do curso">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
