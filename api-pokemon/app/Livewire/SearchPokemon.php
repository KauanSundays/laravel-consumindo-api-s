<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchPokemon extends Component
{
    public $idPokemon = '';
    public $pokemonData = '';


    public function searchPokemon($id)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}")->json();

        // Verifica se a chave 'name' existe no array de resposta
        if (isset($response['name'])) {
            $this->pokemonData = [
                'name' => $response['name'],
                'type' => $response['types'][0]['type']['name'],
                'sprite' => $response['sprites']['front_default'],
            ];
        } else {
            $this->pokemonData = null;
        }
    }
    public function submitForm()
    {
        session()->flash('success', 'Formulário enviado com sucesso!');
    }

    public function render()
    {
        return view('livewire.Search-pokemon');
    }
}