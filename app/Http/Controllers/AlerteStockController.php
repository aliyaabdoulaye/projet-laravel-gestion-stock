<?php

namespace App\Http\Controllers;

use App\Models\AlerteStock;
use App\Http\Requests\StoreAlerteStockRequest;
use App\Http\Requests\UpdateAlerteStockRequest;

class AlerteStockController extends Controller
{
    public function index()
    {
        $alertes = AlerteStock::all();
        return view('alerte_stocks.index', compact('alertes'));
    }

    public function create()
    {
        return view('alerte_stocks.create');
    }

    public function store(StoreAlerteStockRequest $request)
    {
        AlerteStock::create($request->validated());
        return redirect()->route('alerte_stocks.index')->with('success', 'Alerte stock créée.');
    }

    public function show(AlerteStock $alerteStock)
    {
        return view('alerte_stocks.show', compact('alerteStock'));
    }

    public function edit(AlerteStock $alerteStock)
    {
        return view('alerte_stocks.edit', compact('alerteStock'));
    }

    public function update(UpdateAlerteStockRequest $request, AlerteStock $alerteStock)
    {
        $alerteStock->update($request->validated());
        return redirect()->route('alerte_stocks.index')->with('success', 'Alerte stock mise à jour.');
    }

    public function destroy(AlerteStock $alerteStock)
    {
        $alerteStock->delete();
        return redirect()->route('alerte_stocks.index')->with('success', 'Alerte stock supprimée.');
    }
}
