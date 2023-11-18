<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RickandMortyController;

Route::get('/', function(){return view('welcome');});
Route::get('/fetch-character-data',[RickandMortyController::class,'getCharacterData'])->name('fetch-character-data');