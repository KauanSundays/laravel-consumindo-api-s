<div class="max-w-md mx-auto bg-gray-200">
    <h1 class="text-2xl font-bold mb-4">Pokemon</h1>

    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label for="cep" class="block text-gray-700">Id do Pokemon</label>
            <input type="text" id="idPokemon" wire:model.lazy="idPokemon" 
                placeholder="Digite o ID do Pokémon" 
                class="w-full p-2 border rounded"
            />
            {{-- Ao colocar wiremode.lazy ele configura que os campos serão alterados apos eu preencher o campo de cep
                e sair desse campo
             --}}
            @error('idPokemon') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </form>
</div>
