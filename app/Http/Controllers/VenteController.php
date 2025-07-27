<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateVenteRequest;

class VenteController extends Controller
{
    public function index()
    {
        $ventes = Vente::all();
        return view('ventes.index', compact('ventes'));
    }

    public function create()
{
    $clients = Client::all();
    return view('ventes.create', compact('clients'));
}

public function store(Request $request)
{
    $request->validate([
        'client_id' => 'nullable|exists:clients,id',
        'nouveau_nom' => 'required_without:client_id|string|max:255',
        'nouveau_prenom' => 'nullable|string|max:255',
        'nouveau_contact' => 'nullable|string|max:255',
        'montant_total' => 'required|numeric|min:0',
    ]);

    if ($request->input('client_id') === 'new' || !$request->filled('client_id')) {
        $client = Client::create([
            'nom' => $request->input('nouveau_nom'),
            'prenom' => $request->input('nouveau_prenom'),
            'contact' => $request->input('nouveau_contact'),
        ]);
        $client_id = $client->id;
    } else {
        $client_id = $request->input('client_id');
    }

    Vente::create([
        'client_id' => $client_id,
        'montant_total' => $request->input('montant_total'),
        'user_id' => auth()->id(),
        'date' => now(),
    ]);

    return redirect()->route('ventes.index')->with('success', 'Vente enregistrée avec succès !');
}

    public function show(Vente $vente)
    {
        return view('ventes.show', compact('vente'));
    }

    public function edit(Vente $vente)
    {
        return view('ventes.edit', compact('vente'));
    }

    public function update(UpdateVenteRequest $request, Vente $vente)
    {
        $vente->update($request->validated());
        return redirect()->route('ventes.index')->with('success', 'Vente mise à jour.');
    }

    public function destroy(Vente $vente)
    {
        $vente->delete();
        return redirect()->route('ventes.index')->with('success', 'Vente supprimée.');
    }
}
