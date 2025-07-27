@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Lot de Produit</h1>

    <form action="{{ route('lot_produits.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Quantité</label>
            <input type="number" name="quantite" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Prix Unitaire</label>
            <input type="number" step="0.01" name="prix_unitaire" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Date de Péremption</label>
            <input type="date" name="date_peremption" class="w-full border p-2">
        </div>

        <div>
            <label class="block">Référence</label>
            <select name="reference_id" class="w-full border p-2" required>
                @foreach ($references as $reference)
                    <option value="{{ $reference->id }}">{{ $reference->code_reference }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
