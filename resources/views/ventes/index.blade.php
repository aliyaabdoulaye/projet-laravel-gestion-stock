@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ventes</h1>

    <a href="{{ route('ventes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter une Vente</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Montant Total</th>
                <th class="border px-4 py-2">Employé</th>
                <th class="border px-4 py-2">Client</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventes as $vente)
                <tr>
                    <td class="border px-4 py-2">{{ $vente->id }}</td>
                    <td class="border px-4 py-2">{{ $vente->date }}</td>
                    <td class="border px-4 py-2">{{ $vente->montant_total }}</td>
                    <td class="border px-4 py-2">{{ $vente->user->nom }}</td>
                    <td class="border px-4 py-2">{{ $vente->client->nom }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('ventes.edit', $vente) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('ventes.destroy', $vente) }}" method="POST" class="inline-block">
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
