<div>
    <h1>Editar</h1>
    <form action="{{route('curso.update', $curso->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="nome do curso" value="{{ $curso->nome }}">
        <input type="number" name="duracao" placeholder="duração do curso" value="{{ $curso->duracao }}">
        <input type="submit" value="Salvar">
        <a href="{{route('curso.index')}}">Voltar</a>
    </form>
</div>
