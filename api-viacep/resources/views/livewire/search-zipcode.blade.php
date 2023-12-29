<div class="max-w-md mx-auto bg-gray-200">
    <h1 class="text-2xl font-bold mb-4">Cadastro Escolar</h1>

    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label for="cep" class="block text-gray-700">CEP</label>
            <input type="text" id="cep" wire:model="zipcode" placeholder="Digite o CEP" class="w-full p-2 border rounded"/>
            @error('zipcode') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="street" class="block text-gray-700">Rua</label>
            <input type="text" id="street" wire:model="street" placeholder="Digite a rua" class="w-full p-2 border rounded"/>
        </div>

        <div class="mb-4">
            <label for="neighborhood" class="block text-gray-700">Bairro</label>
            <input type="text" id="neighborhood" wire:model="neighborhood" placeholder="Digite o bairro" class="w-full p-2 border rounded"/>
        </div>

        <div class="mb-4">
            <label for="city" class="block text-gray-700">Cidade</label>
            <input type="text" id="city" wire:model="city" placeholder="Digite a cidade" class="w-full p-2 border rounded"/>
        </div>

        <div class="mb-4">
            <label for="state" class="block text-gray-700">Estado</label>
            <input type="text" id="state" wire:model="state" placeholder="Digite o estado" class="w-full p-2 border rounded"/>
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded">Salvar</button>
        </div>
    </form>
</div>
