@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Factures</h1>

    <a href="{{ route('factures.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Nouvelle Facture</a>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Montant</th>
                <th class="border px-4 py-2">Vente ID</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($factures as $facture)
                <tr>
                    <td class="border px-4 py-2">{{ $facture->id }}</td>
                    <td class="border px-4 py-2">{{ $facture->date->format('d/m/Y') }}</td>
                    <td class="border px-4 py-2">{{ number_format($facture->montant, 2, ',', ' ') }} FCFA</td>
                    <td class="border px-4 py-2">{{ $facture->vente_id }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('factures.edit', $facture->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Modifier</a>
                        <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Supprimer cette facture ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
