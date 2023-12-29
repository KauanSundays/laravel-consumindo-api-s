<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
    public $zipcodeData;
    public $zipcode = '';
    public $street = '';
    public $neig = '';

    public function updatedZipcode(string $value)
    {
        dd($value);
    }


    public function mount(): void
    {
        $response = Http::get('https://viacep.com.br/ws/05311020/json')->json();
        // dd($response['logradouro']);
    }

    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
