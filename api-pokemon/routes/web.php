<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SearchPokemon;

Route::get('/', SearchPokemon::class)->name('search-pokemon');