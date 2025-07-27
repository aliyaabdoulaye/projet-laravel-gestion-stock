@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier Facture #{{ $facture->id }}</h1>

    <form action="{{ route('factures.update', $facture->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Date</label>
            <input type="date" name="date" value="{{ $facture->date->format('Y-m-d') }}" class="border px-2 py-1 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Montant</label>
            <input type="number" step="0.01" name="montant" value="{{ $facture->montant }}" class="border px-2 py-1 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Vente</label>
            <select name="vente_id" class="border px-2 py-1 w-full" required>
                @foreach ($ventes as $vente)
                    <option value="{{ $vente->id }}" {{ $facture->vente_id == $vente->id ? 'selected' : '' }}>
                        Vente #{{ $vente->id }} - {{ $vente->date->format('d/m/Y') }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
