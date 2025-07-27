@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-md">
    <h1 class="text-2xl font-bold mb-4">Ajouter un nouveau client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold" for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="border px-2 py-1 w-full" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold" for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="border px-2 py-1 w-full">
        </div>

        <div class="mb-4">
            <label class="block font-semibold" for="contact">Contact</label>
            <input type="text" name="contact" id="contact" class="border px-2 py-1 w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Enregistrer</button>
    </form>
</div>
@endsection
