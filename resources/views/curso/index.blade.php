@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-light p-3 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="m-0">Cursos Cadastrados</h1>
        <div>
            <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary btn-sm">Voltar para Disciplinas</a>
            <a href="{{ route('curso.create') }}" class="btn btn-primary btn-sm">Novo curso</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DURAÇÃO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->duracao }}</td>
                    <td>
                        <a href="{{ route('curso.show', $curso->id) }}" class="btn btn-sm btn-info">Mais info</a>
                        <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('curso.destroy', $curso->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
