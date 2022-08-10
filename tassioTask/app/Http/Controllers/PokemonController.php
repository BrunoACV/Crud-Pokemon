<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Pokemon;
use app\Http\Controllers\PokemonServices;
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
        return view('index', ['added' => $register->store($request)]) . redirect('pokemon/list');
    }


    public function listPokemon()
    {
        $listPokemon = new PokemonService();
        return view('pokemon-list', ['pokemons' => $listPokemon->list()]);
    }


    public function updatePage($id)
    {
        return view('edit-pokemon');
    }

    public function update(Request $request, $id)
    {

        $pokemon = new PokemonService;
        $pokemon->updateObject($request, $id);
        return redirect('/pokemon/list');
    }

    public function delete($id)
    {
        PokemonService::delete($id);
        return redirect('/pokemon/list');
    }
}
