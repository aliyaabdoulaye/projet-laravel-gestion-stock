@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Produit</h1>

    <form action="{{ route('produits.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Nom</label>
            <input type="text" name="nom" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Catégorie</label>
            <select name="categorie_id" class="w-full border p-2">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
