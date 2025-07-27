@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter une Référence</h1>

    <form action="{{ route('references.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Code Référence</label>
            <input type="text" name="code_reference" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Produit</label>
            <select name="produit_id" class="w-full border p-2" required>
                @foreach ($produits as $produit)
                    <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
