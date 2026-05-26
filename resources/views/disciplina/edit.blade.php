@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Disciplina</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('disciplinas.update', $disciplina) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome', $disciplina->nome) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Carga Horária</label>
                <input type="number" name="carga_horaria" class="form-control" value="{{ old('carga_horaria', $disciplina->carga_horaria) }}">
            </div>
            <button class="btn btn-primary">Atualizar</button>
            <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
