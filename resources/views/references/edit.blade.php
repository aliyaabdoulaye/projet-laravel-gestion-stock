@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier la Référence</h1>

    <form action="{{ route('references.update', $reference) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Code Référence</label>
            <input type="text" name="code_reference" value="{{ old('code_reference', $reference->code_reference) }}" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Produit</label>
            <select name="produit_id" class="w-full border p-2" required>
                @foreach ($produits as $produit)
                    <option value="{{ $produit->id }}" {{ $produit->id == $reference->produit_id ? 'selected' : '' }}>
                        {{ $produit->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
