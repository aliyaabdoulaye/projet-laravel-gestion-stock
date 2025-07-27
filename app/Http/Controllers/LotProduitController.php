<?php

namespace App\Http\Controllers;

use App\Models\LotProduit;
use App\Http\Requests\StoreLotProduitRequest;
use App\Http\Requests\UpdateLotProduitRequest;

class LotProduitController extends Controller
{
    public function index()
    {
        $lots = LotProduit::all();
        return view('lot_produits.index', compact('lots'));
    }

    public function create()
    {
        return view('lot_produits.create');
    }

    public function store(StoreLotProduitRequest $request)
    {
        LotProduit::create($request->validated());
        return redirect()->route('lot_produits.index')->with('success', 'Lot créé.');
    }

    public function show(LotProduit $lotProduit)
    {
        return view('lot_produits.show', compact('lotProduit'));
    }

    public function edit(LotProduit $lotProduit)
    {
        return view('lot_produits.edit', compact('lotProduit'));
    }

    public function update(UpdateLotProduitRequest $request, LotProduit $lotProduit)
    {
        $lotProduit->update($request->validated());
        return redirect()->route('lot_produits.index')->with('success', 'Lot mis à jour.');
    }

    public function destroy(LotProduit $lotProduit)
    {
        $lotProduit->delete();
        return redirect()->route('lot_produits.index')->with('success', 'Lot supprimé.');
    }
}
