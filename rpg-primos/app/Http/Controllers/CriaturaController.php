<?php

namespace App\Http\Controllers;

use App\Models\Criatura;
use Illuminate\Http\Request;

class CriaturaController extends Controller
{
    public function index()
    {
        $criaturas = Criatura::all();
        return view('criaturas.index', compact('criaturas'));
    }

    public function create()
    {
        return view('criaturas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|in:monstro,valquiria,personagem',
        ]);

        Criatura::create($request->all());
        return redirect()->route('criaturas.index')->with('success', 'Criatura criada com sucesso!');
    }

    public function show(Criatura $criatura)
    {
        return view('criaturas.show', compact('criatura'));
    }

    public function edit(Criatura $criatura)
    {
        return view('criaturas.edit', compact('criatura'));
    }

    public function update(Request $request, Criatura $criatura)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|in:monstro,valquiria,personagem',
        ]);

        $criatura->update($request->all());
        return redirect()->route('criaturas.index')->with('success', 'Criatura atualizada!');
    }

    public function destroy(Criatura $criatura)
    {
        $criatura->delete();
        return redirect()->route('criaturas.index')->with('success', 'Criatura removida.');
    }
}
