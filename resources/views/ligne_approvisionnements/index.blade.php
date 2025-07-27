@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Lignes d'Approvisionnement</h1>

    <a href="{{ route('ligne_approvisionnements.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter une Ligne</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Approvisionnement</th>
                <th class="border px-4 py-2">Lot Produit</th>
                <th class="border px-4 py-2">Quantité</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ligneApprovisionnements as $ligne)
                <tr>
                    <td class="border px-4 py-2">{{ $ligne->id }}</td>
                    <td class="border px-4 py-2">{{ $ligne->approvisionnement->id }}</td>
                    <td class="border px-4 py-2">{{ $ligne->lotProduit->id }}</td>
                    <td class="border px-4 py-2">{{ $ligne->quantite }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('ligne_approvisionnements.edit', $ligne) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('ligne_approvisionnements.destroy', $ligne) }}" method="POST" class="inline-block">
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
