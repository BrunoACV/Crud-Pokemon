<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/register-pokemon.css') }}" rel="stylesheet">
    <title>Pokemon</title>
</head>

<div class="body">

    <body>
        <div class="return">
            <a href="/">Return</a>
        </div>
        {{-- This pokémon form will consume the data from the client side and push it into the database using the POST method --}}
        <div class="escolha">
            <form method="POST" action="/pokemon/register">
                @csrf

                <label for="nome">Pokemon's name</label>
                <input type="text" name="name" id="name" class="form-control" required />

                <label for="nome">Level</label>
                <input type="number" name="level" class="form-control" required />

                <label for="nome">Type</label>
                <select type="text" name="type" class="form-control" required>
                    <option value=""></option>
                    <option value="Bug">Bug</option>
                    <option value="Dark">Dark</option>
                    <option value="Dragon">Dragon</option>
                    <option value="Eletric">Eletric</option>
                    <option value="Fairy">Fairy</option>
                    <option value="Fighting">Fighting</option>
                    <option value="Fire">Fire</option>
                    <option value="Flying">Flying</option>
                    <option value="Ghost">Ghost</option>
                    <option value="Grass">Grass</option>
                    <option value="Ground">Ground</option>
                    <option value="Ice">Ice</option>
                    <option value="Normal">Normal</option>
                    <option value="Poison">Poison</option>
                    <option value="Psychic">Psychic</option>
                    <option value="Rock">Rock</option>
                    <option value="Steel">Steel</option>
                    <option value="Water">Water</option>
                </select>

                <label for="nome">Gender</label>
                <select type="text" name="gender" class="form-control" required>
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <button type="submit">Register</button>
        </div>

        </form>
    </body>
</div>

</html>
