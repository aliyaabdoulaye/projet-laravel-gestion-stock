@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter un Fournisseur</h1>

    <form action="{{ route('fournisseurs.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block">Nom</label>
            <input type="text" name="nom" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Contact</label>
            <input type="text" name="contact" class="w-full border p-2" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
