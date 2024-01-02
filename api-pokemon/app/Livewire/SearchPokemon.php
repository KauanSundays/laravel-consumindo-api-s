<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchPokemon extends Component
{
    public $idPokemon = '';
    public $pokemonData;

    public function updatedIdPokemon(string $value)
    {
        // Limpa os dados do Pokémon ao alterar o ID
        $this->pokemonData = null;

        // Se o ID não estiver vazio, faz a chamada à API
        if (!empty($value)) {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$value}")->json();

            // Atribui os dados do Pokémon à propriedade para uso posterior
            $this->pokemonData = [
                'name' => $response['name'],
                'type' => $response['types'][0]['type']['name'], // Apenas pegando o primeiro tipo, você pode ajustar conforme necessário
                'sprite' => $response['sprites']['front_default'],
            ];
        }
    }

    public function render()
    {
        return view('livewire.search-pokemon');
    }
}
