<div>
    <h1>Cursos Cadastrados</h1>
    <a href="{{route('curso.create')}}">Novo curso</a>

    <table>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DURACAO</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $curso)
                <tr>
                    <td>{{ $curso->id}}</td>
                    <td>{{ $curso->nome}}</td>
                    <td>{{ $curso->duracao}}</td>
                    <td>
                        <a href="{{route('curso.show', $curso->id)}}">Mais info</a>
                        <a href="{{route('curso.edit', $curso->id)}}">editar</a>
                        <form action="{{ route('curso.destroy', $curso->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
