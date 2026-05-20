<div>
    <h1>Novo curso</h1>
    <form action="{{route('curso.store')}}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="nome do curso">
        <input type="number" name="duracao" placeholder="duração do curso">
        <input type="submit" value="Salvar">
        <a href="{{route('curso.index')}}">Voltar</a>
    </form>
</div>
