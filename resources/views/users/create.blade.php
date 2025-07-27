@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Créer un utilisateur</h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <label>Nom</label>
        <input type="text" name="nom" class="border w-full mb-3" required>

        <label>Prénom</label>
        <input type="text" name="prenom" class="border w-full mb-3">

        <label>Sexe</label>
        <select name="sexe" class="border w-full mb-3">
            <option value="">-- Choisir --</option>
            <option value="F">Féminin</option>
            <option value="M">Masculin</option>
        </select>

        <label>Téléphone</label>
        <input type="text" name="telephone" class="border w-full mb-3">

        <label>Email</label>
        <input type="email" name="email" class="border w-full mb-3" required>

        <label>Mot de passe</label>
        <input type="password" name="password" class="border w-full mb-3" required>

        <label>Confirmer mot de passe</label>
        <input type="password" name="password_confirmation" class="border w-full mb-3" required>

        <label>Rôle</label>
        <select name="role" class="border w-full mb-3" required>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Créer
        </button>
    </form>
</div>
@endsection
