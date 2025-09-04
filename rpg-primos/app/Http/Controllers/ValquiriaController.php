<?php

namespace App\Http\Controllers;

use App\Models\Valquiria;
use App\Models\Criatura;
use Illuminate\Http\Request;

class ValquiriaController extends Controller
{
    public function index()
    {
        $valquirias = Valquiria::with('criatura')->get();
        return view('valquirias.index', compact('valquirias'));
    }

    public function create()
    {
        $criaturas = Criatura::where('tipo', 'valquiria')->get();
        return view('valquirias.create', compact('criaturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'criatura_id' => 'required|exists:criaturas,id',
            'raca' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
            'armadura' => 'nullable|string',
            'arma_1' => 'nullable|string',
            'arma_2' => 'nullable|string',
            'personagens' => 'nullable|json',
        ]);

        Valquiria::create($request->all());
        return redirect()->route('valquirias.index')->with('success', 'Valquíria criada!');
    }

    public function show(Valquiria $valquiria)
    {
        return view('valquirias.show', compact('valquiria'));
    }

    public function edit(Valquiria $valquiria)
    {
        return view('valquirias.edit', compact('valquiria'));
    }

    public function update(Request $request, Valquiria $valquiria)
    {
        $request->validate([
            'raca' => 'required|string|max:255',
            'classe' => 'required|string|max:255',
        ]);

        $valquiria->update($request->all());
        return redirect()->route('valquirias.index')->with('success', 'Valquíria atualizada!');
    }

    public function destroy(Valquiria $valquiria)
    {
        $valquiria->delete();
        return redirect()->route('valquirias.index')->with('success', 'Valquíria removida.');
    }
}
