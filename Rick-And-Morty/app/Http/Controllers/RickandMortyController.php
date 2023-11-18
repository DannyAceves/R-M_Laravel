<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RickandMortyController extends Controller
{
    public function getCharacterData(Request $request)
    {
        $location = $request->input('location');
        $locationData = Http::get("https://rickandmortyapi.com/api/location/{$location}")->json();
        $residents = collect($locationData['residents'])
        ->sortBy('name')
        ->take(5)
        ->map(function($resident){
            $characterData=
            Http::get($resident)->json();
            return[
                'name' => $characterData['name'],
                'status' => $characterData['status'],
                'species' => $characterData['species'],
                'origin' => $characterData['origin']['name'],
                'image' => $characterData['image'],
                'episodes' => $characterData['episode'],
            ];
        });
        return view('welcome', ['characters' => $residents, 'locationData' => $locationData]);
    }
}