<?php

namespace App\Http\Controllers;

use App\Models\LigneVente;
use App\Http\Requests\StoreLigneVenteRequest;
use App\Http\Requests\UpdateLigneVenteRequest;

class LigneVenteController extends Controller
{
    public function index()
    {
        $lignes = LigneVente::all();
        return view('ligne_ventes.index', compact('lignes'));
    }

    public function create()
    {
        return view('ligne_ventes.create');
    }

    public function store(StoreLigneVenteRequest $request)
    {
        LigneVente::create($request->validated());
        return redirect()->route('ligne_ventes.index')->with('success', 'Ligne de vente ajoutée.');
    }

    public function show(LigneVente $ligneVente)
    {
        return view('ligne_ventes.show', compact('ligneVente'));
    }

    public function edit(LigneVente $ligneVente)
    {
        return view('ligne_ventes.edit', compact('ligneVente'));
    }

    public function update(UpdateLigneVenteRequest $request, LigneVente $ligneVente)
    {
        $ligneVente->update($request->validated());
        return redirect()->route('ligne_ventes.index')->with('success', 'Ligne de vente mise à jour.');
    }

    public function destroy(LigneVente $ligneVente)
    {
        $ligneVente->delete();
        return redirect()->route('ligne_ventes.index')->with('success', 'Ligne de vente supprimée.');
    }
}
