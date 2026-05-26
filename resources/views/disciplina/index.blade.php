@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Disciplinas</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('disciplinas.create') }}" class="btn btn-primary mb-3">Nova Disciplina</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Carga Horária</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disciplinas as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nome }}</td>
                        <td>{{ $d->carga_horaria }}</td>
                        <td>
                            <a href="{{ route('disciplinas.show', $d) }}" class="btn btn-sm btn-secondary">Ver</a>
                            <a href="{{ route('disciplinas.edit', $d) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('disciplinas.destroy', $d) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Confirma exclusão?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $disciplinas->links() }}
    </div>
@endsection
