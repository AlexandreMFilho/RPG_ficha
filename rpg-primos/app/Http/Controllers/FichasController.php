<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Valquiria;

class FichasController extends Controller
{
    public function index()
    {
        $ficha = Fichas::find(1);

        $imagens = [
            asset('imgs/mulher_verde.jpg'),
            asset('imgs/max.jpg'),
            asset('imgs/mana_circle_1.jpg'),
            asset('imgs/mana_circle_3.jpg'),
            asset('imgs/pena_3.jpg'),
            asset('imgs/colorless.jpg'),
            asset('imgs/forest.jpg'),
            asset('imgs/island.jpg'),
            asset('imgs/mountain.jpg'),
        ];

        
        return view('fichas.index', compact('ficha','imagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $imagens = [
            'imgs/hero1.jpg',
            'imgs/hero2.jpg',
            'imgs/hero3.jpg',
        ];
        return view('sua-view', compact('imagens'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
