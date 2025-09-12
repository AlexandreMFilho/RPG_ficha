<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use App\Models\Criatura;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index()
    {
        $personagens = Personagem::with('criatura')->get();
        return view('personagens.index', compact('personagens'));
    }

    public function create()
    {
        $criaturas = Criatura::where('tipo', 'personagem')->get();
        return view('personagens.create', compact('criaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'criatura_id' => 'required|exists:criaturas,id',
            'nome' => 'required|string|max:255',
            'classe' => 'required|string',
            'raca' => 'required|string',
        ]);

        Personagem::create($request->all());
        return redirect()->route('personagens.index')->with('success', 'Personagem criado!');
    }

    public function show(Personagem $personagem)
    {
        return view('personagens.show', compact('personagem'));
    }

    public function edit(Personagem $personagem)
    {
        return view('personagens.edit', compact('personagem'));
    }

    public function update(Request $request, Personagem $personagem)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $personagem->update($request->all());
        return redirect()->route('personagens.index')->with('success', 'Personagem atualizado!');
    }

    public function destroy(Personagem $personagem)
    {
        $personagem->delete();
        return redirect()->route('personagens.index')->with('success', 'Personagem removido.');
    }

    public function getPersonagem(Request $request)
    {
        return "retorno getPersonagem";
    }
}
