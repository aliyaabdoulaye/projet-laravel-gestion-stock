<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Http\Requests\StoreReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::all();
        return view('references.index', compact('references'));
    }

    public function create()
    {
        return view('references.create');
    }

    public function store(StoreReferenceRequest $request)
    {
        Reference::create($request->validated());
        return redirect()->route('references.index')->with('success', 'Référence créée.');
    }

    public function show(Reference $reference)
    {
        return view('references.show', compact('reference'));
    }

    public function edit(Reference $reference)
    {
        return view('references.edit', compact('reference'));
    }

    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        $reference->update($request->validated());
        return redirect()->route('references.index')->with('success', 'Référence mise à jour.');
    }

    public function destroy(Reference $reference)
    {
        $reference->delete();
        return redirect()->route('references.index')->with('success', 'Référence supprimée.');
    }
}
