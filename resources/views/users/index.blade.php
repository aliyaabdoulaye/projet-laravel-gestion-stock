@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Liste des utilisateurs</h2>

    <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        Ajouter un utilisateur
    </a>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border">
        <thead>
            <tr>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Prénom</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Téléphone</th>
                <th class="border px-4 py-2">Rôle</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->nom }}</td>
                    <td class="border px-4 py-2">{{ $user->prenom }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->telephone }}</td>
                    <td class="border px-4 py-2">
                        {{ $user->roles->pluck('name')->join(', ') }}
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('users.edit', $user) }}" class="text-blue-500 mr-2">Modifier</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirmer la suppression ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if ($users->isEmpty())
                <tr>
                    <td colspan="6" class="text-center px-4 py-4">Aucun utilisateur pour l'instant.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
