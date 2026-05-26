@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Disciplina: {{ $disciplina->nome }}</h1>

        <p><strong>ID:</strong> {{ $disciplina->id }}</p>
        <p><strong>Nome:</strong> {{ $disciplina->nome }}</p>
        <p><strong>Carga Horária:</strong> {{ $disciplina->carga_horaria }}</p>

        <a href="{{ route('disciplinas.edit', $disciplina) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
