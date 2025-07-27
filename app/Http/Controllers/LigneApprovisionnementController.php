<?php

namespace App\Http\Controllers;

use App\Models\LigneApprovisionnement;
use App\Http\Requests\StoreLigneApprovisionnementRequest;
use App\Http\Requests\UpdateLigneApprovisionnementRequest;

class LigneApprovisionnementController extends Controller
{
    public function index()
    {
        $lignes = LigneApprovisionnement::all();
        return view('ligne_approvisionnements.index', compact('lignes'));
    }

    public function create()
    {
        return view('ligne_approvisionnements.create');
    }

    public function store(StoreLigneApprovisionnementRequest $request)
    {
        LigneApprovisionnement::create($request->validated());
        return redirect()->route('ligne_approvisionnements.index')->with('success', 'Ligne créée.');
    }

    public function show(LigneApprovisionnement $ligneApprovisionnement)
    {
        return view('ligne_approvisionnements.show', compact('ligneApprovisionnement'));
    }

    public function edit(LigneApprovisionnement $ligneApprovisionnement)
    {
        return view('ligne_approvisionnements.edit', compact('ligneApprovisionnement'));
    }

    public function update(UpdateLigneApprovisionnementRequest $request, LigneApprovisionnement $ligneApprovisionnement)
    {
        $ligneApprovisionnement->update($request->validated());
        return redirect()->route('ligne_approvisionnements.index')->with('success', 'Ligne mise à jour.');
    }

    public function destroy(LigneApprovisionnement $ligneApprovisionnement)
    {
        $ligneApprovisionnement->delete();
        return redirect()->route('ligne_approvisionnements.index')->with('success', 'Ligne supprimée.');
    }
}
