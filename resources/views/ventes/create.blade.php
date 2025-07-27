<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Créer une nouvelle vente') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <form action="{{ route('ventes.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-medium text-sm text-gray-700" for="client_id">Client existant</label>
                <select name="client_id" id="client_id" class="border rounded w-full px-3 py-2" onchange="toggleNewClient(this.value)">
                    <option value="">-- Choisir un client --</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                            {{ $client->nom }} {{ $client->prenom ?? '' }}
                        </option>
                    @endforeach
                    <option value="new">Nouveau client</option>
                </select>
            </div>

            <div id="new-client-fields" style="display: none;">
                <h3 class="font-semibold mb-2">Informations nouveau client</h3>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700" for="nouveau_nom">Nom</label>
                    <input type="text" name="nouveau_nom" id="nouveau_nom" class="border rounded w-full px-3 py-2" value="{{ old('nouveau_nom') }}">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700" for="nouveau_prenom">Prénom</label>
                    <input type="text" name="nouveau_prenom" id="nouveau_prenom" class="border rounded w-full px-3 py-2" value="{{ old('nouveau_prenom') }}">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700" for="nouveau_contact">Contact</label>
                    <input type="text" name="nouveau_contact" id="nouveau_contact" class="border rounded w-full px-3 py-2" value="{{ old('nouveau_contact') }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-sm text-gray-700" for="montant_total">Montant total</label>
                <input type="number" step="0.01" name="montant_total" id="montant_total" class="border rounded w-full px-3 py-2" value="{{ old('montant_total') }}" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Enregistrer la vente
            </button>
        </form>
    </div>

    <script>
        function toggleNewClient(value) {
            const newClientFields = document.getElementById('new-client-fields');
            if (value === 'new') {
                newClientFields.style.display = 'block';
            } else {
                newClientFields.style.display = 'none';
            }
        }

        // Si jamais la page reload avec l'option "Nouveau client" sélectionnée, afficher les champs
        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('client_id');
            if (select.value === 'new') {
                toggleNewClient('new');
            }
        });
    </script>
</x-app-layout>
