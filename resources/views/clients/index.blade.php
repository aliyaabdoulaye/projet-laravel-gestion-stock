@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Clients</h1>

    <a href="{{ route('clients.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">Ajouter un Client</a>

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Prénom</th>
                <th class="border px-4 py-2">Contact</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td class="border px-4 py-2">{{ $client->id }}</td>
                    <td class="border px-4 py-2">{{ $client->nom }}</td>
                    <td class="border px-4 py-2">{{ $client->prenom ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $client->contact ?? '-' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('clients.edit', $client->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Modifier</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded" onclick="return confirm('Supprimer ce client ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
