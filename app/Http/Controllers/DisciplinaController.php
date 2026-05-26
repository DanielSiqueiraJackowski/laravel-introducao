<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::orderBy('id','desc')->paginate(10);
        return view('disciplina.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplina.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:0',
        ]);

        Disciplina::create($data);
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina criada com sucesso.');
    }

    public function show(Disciplina $disciplina)
    {
        return view('disciplina.show', compact('disciplina'));
    }

    public function edit(Disciplina $disciplina)
    {
        return view('disciplina.edit', compact('disciplina'));
    }

    public function update(Request $request, Disciplina $disciplina)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:0',
        ]);

        $disciplina->update($data);
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina atualizada com sucesso.');
    }

    public function destroy(Disciplina $disciplina)
    {
        $disciplina->delete();
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina removida.');
    }
}
