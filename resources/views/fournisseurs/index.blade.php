@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Fournisseurs</h1>

    <a href="{{ route('fournisseurs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter un fournisseur</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Contact</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fournisseurs as $fournisseur)
                <tr>
                    <td class="border px-4 py-2">{{ $fournisseur->id }}</td>
                    <td class="border px-4 py-2">{{ $fournisseur->nom }}</td>
                    <td class="border px-4 py-2">{{ $fournisseur->contact }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('fournisseurs.edit', $fournisseur) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('fournisseurs.destroy', $fournisseur) }}" method="POST" class="inline-block">
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
