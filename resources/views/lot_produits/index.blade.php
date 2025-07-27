@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Lots de Produits</h1>

    <a href="{{ route('lot_produits.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter un Lot</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Quantité</th>
                <th class="border px-4 py-2">Prix Unitaire</th>
                <th class="border px-4 py-2">Date Péremption</th>
                <th class="border px-4 py-2">Référence</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lotProduits as $lot)
                <tr>
                    <td class="border px-4 py-2">{{ $lot->id }}</td>
                    <td class="border px-4 py-2">{{ $lot->quantite }}</td>
                    <td class="border px-4 py-2">{{ $lot->prix_unitaire }}</td>
                    <td class="border px-4 py-2">{{ $lot->date_peremption }}</td>
                    <td class="border px-4 py-2">{{ $lot->reference->code_reference ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('lot_produits.edit', $lot) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('lot_produits.destroy', $lot) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Confirmer ?')" class="text-red-500 ml-2">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
