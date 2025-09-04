<?php

namespace App\Http\Controllers;

use App\Models\Monstro;
use App\Models\Criatura;
use Illuminate\Http\Request;

class MonstroController extends Controller
{
    public function index()
    {
        $monstros = Monstro::with('criatura')->get();
        return view('monstros.index', compact('monstros'));
    }

    public function create()
    {
        $criaturas = Criatura::where('tipo', 'monstro')->get();
        return view('monstros.create', compact('criaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'criatura_id' => 'required|exists:criaturas,id',
            'nome' => 'required|string|max:255',
        ]);

        Monstro::create($request->all());
        return redirect()->route('monstros.index')->with('success', 'Monstro criado!');
    }

    public function show(Monstro $monstro)
    {
        return view('monstros.show', compact('monstro'));
    }

    public function edit(Monstro $monstro)
    {
        return view('monstros.edit', compact('monstro'));
    }

    public function update(Request $request, Monstro $monstro)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $monstro->update($request->all());
        return redirect()->route('monstros.index')->with('success', 'Monstro atualizado!');
    }

    public function destroy(Monstro $monstro)
    {
        $monstro->delete();
        return redirect()->route('monstros.index')->with('success', 'Monstro removido.');
    }
}
