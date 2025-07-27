@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier Vente</h1>

    <form action="{{ route('ventes.update', $vente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block">Date</label>
            <input type="date" name="date" value="{{ $vente->date }}" class="border px-2 py-1" readonly>
        </div>

        <div class="mb-4">
            <label class="block">Client</label>
            <select name="client_id" class="border px-2 py-1">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ $vente->client_id == $client->id ? 'selected' : '' }}>
                        {{ $client->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block">Montant total</label>
            <input type="number" step="0.01" name="montant_total" value="{{ $vente->montant_total }}" class="border px-2 py-1">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection
