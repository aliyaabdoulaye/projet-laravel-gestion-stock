@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Catégories</h1>

    <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter Catégorie</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Description</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td class="border px-4 py-2">{{ $categorie->id }}</td>
                    <td class="border px-4 py-2">{{ $categorie->nom }}</td>
                    <td class="border px-4 py-2">{{ $categorie->description }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('categories.edit', $categorie) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('categories.destroy', $categorie) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Confirmer ?')" class="text-red-500 ml-2">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
