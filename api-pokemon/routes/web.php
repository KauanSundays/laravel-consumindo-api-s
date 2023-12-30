<?php

use App\Livewire\SearchPokemon;
use Illuminate\Support\Facades\Route;


Route::get('/', SearchPokemon::class)->name('search-pokemon');