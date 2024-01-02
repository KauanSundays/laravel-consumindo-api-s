<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchPokemon extends Component
{
    public $idPokemon = '';

    public function updatedIdPokemon(string $value)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$value}")->json();

        dd($response);
    }

    public function render()
    {
        return view('livewire.search-pokemon');
    }
}