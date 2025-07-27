@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier un Approvisionnement</h1>

    <form action="{{ route('approvisionnements.update', $approvisionnement) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Date</label>
            <input type="date" name="date" value="{{ old('date', $approvisionnement->date) }}" class="w-full border p-2" required>
        </div>

        <div>
            <label class="block">Fournisseur</label>
            <select name="fournisseur_id" class="w-full border p-2" required>
                @foreach ($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}" {{ $fournisseur->id == $approvisionnement->fournisseur_id ? 'selected' : '' }}>
                        {{ $fournisseur->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
