@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Modifier l'utilisateur</h2>
    <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')

        <label>Nom</label>
        <input type="text" name="nom" class="border w-full mb-3" value="{{ old('nom', $user->nom) }}" required>

        <label>Prénom</label>
        <input type="text" name="prenom" class="border w-full mb-3" value="{{ old('prenom', $user->prenom) }}">

        <label>Sexe</label>
        <select name="sexe" class="border w-full mb-3">
            <option value="">-- Choisir --</option>
            <option value="F" {{ $user->sexe == 'F' ? 'selected' : '' }}>Féminin</option>
            <option value="M" {{ $user->sexe == 'M' ? 'selected' : '' }}>Masculin</option>
        </select>

        <label>Téléphone</label>
        <input type="text" name="telephone" class="border w-full mb-3" value="{{ old('telephone', $user->telephone) }}">

        <label>Email</label>
        <input type="email" name="email" class="border w-full mb-3" value="{{ old('email', $user->email) }}" required>

        <label>Mot de passe (laisser vide pour ne pas changer)</label>
        <input type="password" name="password" class="border w-full mb-3">

        <label>Confirmer mot de passe</label>
        <input type="password" name="password_confirmation" class="border w-full mb-3">

        <label>Rôle</label>
        <select name="role" class="border w-full mb-3" required>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}" {{ $user->roles->first()?->name == $role->name ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Mettre à jour
        </button>
    </form>
</div>
@endsection
