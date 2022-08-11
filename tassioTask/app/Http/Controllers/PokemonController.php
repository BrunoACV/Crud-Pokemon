<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Http\Controllers\PokemonService;
use Monolog\Registry;

class PokemonController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {

        return view('register-pokemon');
    }

    public function storePokemon(Request $request)
    {
        $register = new PokemonService;
        $register->store($request);
        return redirect('pokemon/list');
    }

    public function listPokemon()
    {
        return view('pokemon-list', ['pokemons' => Pokemon::all()]);
    }

    public function updatePage($id)
    {
        return view('edit-pokemon', ['pokemon' => Pokemon::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $pokemon = new PokemonService;
        $pokemon->updateObject($request, $id);

        return redirect('pokemon/list');
    }

    public function delete($id)
    {
        PokemonService::delete($id);
        return redirect('/pokemon/list');
    }
}
