<?php

namespace App\Livewire;

use Livewire\Component;

class SearchPokemon extends Component
{
    // public $zipcodeData;
    // public $zipcode = '';
    // public $street = '';
    // public $neighborhood = '';
    // public $city = '';
    // public $state = '';

    // public function updatedZipcode(string $value) 
    //pode ser colocado acim depois de updated, necessario adicionar o lazy no input
    // {
    //     dd($value);
    // }

    public function updatedZipcode(string $value)
    {
        $response = Http::get("https://viacep.com.br/ws/{$value}/json/")->json();

        $this->street = $response['logradouro'] ?? '';
        $this->neighborhood = $response['bairro'] ?? '';
        $this->city = $response['localidade'] ?? '';
        $this->state = $response['uf'] ?? '';
    }

    public function render()
    {
        return view('livewire.search-pokemon');
    }
}