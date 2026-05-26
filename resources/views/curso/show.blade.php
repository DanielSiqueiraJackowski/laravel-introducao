@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-light p-3 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="m-0">Informações do Curso</h1>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary btn-sm">Voltar para Disciplinas</a>
    </div>

    <h3>ID: ({{ $curso->id }})</h3>
    <h3>NOME: ({{ $curso->nome }})</h3>
    <h3>DURAÇÃO: ({{ $curso->duracao }})</h3>
</div>
@endsection
