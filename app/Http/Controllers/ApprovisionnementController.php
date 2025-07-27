<?php

namespace App\Http\Controllers;

use App\Models\Approvisionnement;
use App\Http\Requests\StoreApprovisionnementRequest;
use App\Http\Requests\UpdateApprovisionnementRequest;

class ApprovisionnementController extends Controller
{
    public function index()
    {
        $approvisionnements = Approvisionnement::all();
        return view('approvisionnements.index', compact('approvisionnements'));
    }

    public function create()
    {
        return view('approvisionnements.create');
    }

    public function store(StoreApprovisionnementRequest $request)
    {
        Approvisionnement::create($request->validated());
        return redirect()->route('approvisionnements.index')->with('success', 'Approvisionnement créé.');
    }

    public function show(Approvisionnement $approvisionnement)
    {
        return view('approvisionnements.show', compact('approvisionnement'));
    }

    public function edit(Approvisionnement $approvisionnement)
    {
        return view('approvisionnements.edit', compact('approvisionnement'));
    }

    public function update(UpdateApprovisionnementRequest $request, Approvisionnement $approvisionnement)
    {
        $approvisionnement->update($request->validated());
        return redirect()->route('approvisionnements.index')->with('success', 'Approvisionnement mis à jour.');
    }

    public function destroy(Approvisionnement $approvisionnement)
    {
        $approvisionnement->delete();
        return redirect()->route('approvisionnements.index')->with('success', 'Approvisionnement supprimé.');
    }
}
