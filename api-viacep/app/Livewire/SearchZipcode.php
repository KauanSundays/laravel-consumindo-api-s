<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
    public $zipcodeData;

    public function mount(): void
    {
        $response = Http::get('https://viacep.com.br/ws/05311020/json')->json();
        dd($response);
    }

    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
