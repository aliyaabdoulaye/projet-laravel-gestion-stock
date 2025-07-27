@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Toutes les Lignes de Vente</h1>

    <a href="{{ route('ligneventes.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Nouvelle Ligne</a>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Vente</th>
                <th class="border px-4 py-2">Lot Produit</th>
                <th class="border px-4 py-2">Quantité</th>
                <th class="border px-4 py-2">Prix Unitaire Appliqué</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ligneventes as $ligne)
                <tr>
                    <td class="border px-4 py-2">{{ $ligne->id }}</td>
                    <td class="border px-4 py-2">#{{ $ligne->vente_id }}</td>
                    <td class="border px-4 py-2">#{{ $ligne->lot_produit_id }}</td>
                    <td class="border px-4 py-2">{{ $ligne->quantite }}</td>
                    <td class="border px-4 py-2">{{ $ligne->prix_unitaire_applique }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('ligneventes.edit', $ligne->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Modifier</a>
                        <form action="{{ route('ligneventes.destroy', $ligne->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Supprimer ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
