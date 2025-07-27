@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier le Fournisseur</h1>

    <form action="{{ route('fournisseurs.update', $fournisseur) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Nom</label>
            <input type="text" name="nom" value="{{ old('nom', $fournisseur->nom) }}" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Contact</label>
            <input type="text" name="contact" value="{{ old('contact', $fournisseur->contact) }}" class="w-full border p-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
