@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier Catégorie</h1>

    <form action="{{ route('categories.update', $categorie) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Nom</label>
            <input type="text" name="nom" value="{{ $categorie->nom }}" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border p-2">{{ $categorie->description }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
