@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier Ligne de Vente</h1>

    <form action="{{ route('ligneventes.update', $ligneVente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block">Vente</label>
            <select name="vente_id" class="border px-2 py-1">
                @foreach ($ventes as $vente)
                    <option value="{{ $vente->id }}" {{ $ligneVente->vente_id == $vente->id ? 'selected' : '' }}>
                        Vente #{{ $vente->id }} - {{ $vente->date }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block">Lot Produit</label>
            <select name="lot_produit_id" class="border px-2 py-1">
                @foreach ($lotProduits as $lot)
                    <option value="{{ $lot->id }}" {{ $ligneVente->lot_produit_id == $lot->id ? 'selected' : '' }}>
                        Lot #{{ $lot->id }} ({{ $lot->reference_id }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block">Quantité</label>
            <input type="number" name="quantite" value="{{ $ligneVente->quantite }}" class="border px-2 py-1">
        </div>

        <div class="mb-4">
            <label class="block">Prix unitaire appliqué</label>
            <input type="number" step="0.01" name="prix_unitaire_applique" value="{{ $ligneVente->prix_unitaire_applique }}" class="border px-2 py-1">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
