@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Approvisionnements</h1>

    <a href="{{ route('approvisionnements.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter un Approvisionnement</a>

    <table class="min-w-full mt-4 bg-white">
        <thead>
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Date</th>
                <th class="border px-4 py-2">Fournisseur</th>
                <th class="border px-4 py-2">Employé</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($approvisionnements as $approvisionnement)
                <tr>
                    <td class="border px-4 py-2">{{ $approvisionnement->id }}</td>
                    <td class="border px-4 py-2">{{ $approvisionnement->date }}</td>
                    <td class="border px-4 py-2">{{ $approvisionnement->fournisseur->nom }}</td>
                    <td class="border px-4 py-2">{{ $approvisionnement->user->nom }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('approvisionnements.edit', $approvisionnement) }}" class="text-blue-500">Modifier</a>
                        <form action="{{ route('approvisionnements.destroy', $approvisionnement) }}" method="POST" class="inline-block">
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
