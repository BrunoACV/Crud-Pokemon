<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonService extends Controller
{

    public function store(Request $request)
    {

        $pokemon = new Pokemon();
        $pokemon->name = $request->name;
        $pokemon->level = $request->level;
        $pokemon->type = $request->type;
        $pokemon->gender = $request->gender;

        return $pokemon->save();
    }

    public function list()
    {
        $pokemonList = Pokemon::simplePaginate();
        return $pokemonList;
    }

    public function updateObject($request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update([

            'name' => $request->name,
            'level' => $request->level,
            'type' => $request->type,
            'gender' => $request->gender,

        ]);

        return $pokemon;
    }

    public static function delete($id)
    {

        $pokemon = new Pokemon();
        $pokemon::destroy($id);


    }
}
