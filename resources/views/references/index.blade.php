@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Références</h1>

    <a href="{{ route('references.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter une référence</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Code Référence</th>
                <th class="border px-4 py-2">Produit</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($references as $reference)
                <tr>
                    <td class="border px-4 py-2">{{ $reference->id }}</td>
                    <td class="border px-4 py-2">{{ $reference->code_reference }}</td>
                    <td class="border px-4 py-2">{{ $reference->produit->nom ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('references.edit', $reference) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('references.destroy', $reference) }}" method="POST" class="inline-block">
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
