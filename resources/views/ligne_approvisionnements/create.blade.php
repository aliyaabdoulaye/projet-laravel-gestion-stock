@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter une Ligne d'Approvisionnement</h1>

    <form action="{{ route('ligne_approvisionnements.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Approvisionnement</label>
            <select name="approvisionnement_id" class="w-full border p-2" required>
                @foreach ($approvisionnements as $approvisionnement)
                    <option value="{{ $approvisionnement->id }}">#{{ $approvisionnement->id }} - {{ $approvisionnement->date }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Lot Produit</label>
            <select name="lot_produit_id" class="w-full border p-2" required>
                @foreach ($lots as $lot)
                    <option value="{{ $lot->id }}">#{{ $lot->id }} - Prix: {{ $lot->prix_unitaire }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block">Quantité</label>
            <input type="number" name="quantite" class="w-full border p-2" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
