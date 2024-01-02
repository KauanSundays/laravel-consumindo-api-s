<div class="max-w-md mx-auto bg-gray-200">
    <h1 class="text-2xl font-bold mb-4">Pokemon</h1>

    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label for="idPokemon" class="block text-gray-700">Id do Pokemon</label>
            <input type="text" id="idPokemon" wire:model.lazy="idPokemon" 
                placeholder="Digite o ID do Pokémon" 
                class="w-full p-2 border rounded"
            />
            @error('idPokemon') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button wire:click="searchPokemon" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 text-white rounded">
                Buscar Pokémon
            </button>
        </div>

        @if ($pokemonData)
            <div class="mb-4">
                <p><strong>Nome:</strong> {{ $pokemonData['name'] }}</p>
                <p><strong>Tipo:</strong> {{ $pokemonData['type'] }}</p>
                <img src="{{ $pokemonData['sprite'] }}" alt="{{ $pokemonData['name'] }}" class="mt-4" />
            </div>
        @endif
    </form>
</div>
