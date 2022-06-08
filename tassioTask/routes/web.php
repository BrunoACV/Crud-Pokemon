<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokemonService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PokemonController::class, 'index']);
Route::get('/pokemon/register', [PokemonController::class, 'create']);
Route::post('/pokemon/register', [PokemonController::class, 'storePokemon']);
Route::get('/pokemon/list', [PokemonController::class, 'listPokemon']);
Route::get('/pokemon/edit/{id}', [PokemonController::class, 'updatePage']);
Route::post('/pokemon/edit/{id}', [PokemonController::class, 'update']);
Route::get('/pokemon/delete/{id}', [PokemonController::class, 'delete']);
