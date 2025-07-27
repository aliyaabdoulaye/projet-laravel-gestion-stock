@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Produits</h1>

    <a href="{{ route('produits.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter un produit</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Catégorie</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td class="border px-4 py-2">{{ $produit->id }}</td>
                    <td class="border px-4 py-2">{{ $produit->nom }}</td>
                    <td class="border px-4 py-2">{{ $produit->categorie->nom ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('produits.edit', $produit) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('produits.destroy', $produit) }}" method="POST" class="inline-block">
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
