<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/pokemon-list.css') }}" rel="stylesheet">

    <title>Pokemon</title>
</head>

<div class="body">

    <body>
        <div class="return">
            <a href="/">Return</a>
        </div>
        <div class="container">
            @foreach ($pokemons as $pokemon)
                <div class="pokemon">
                    <div class="name-level" style="display:flex;">
                        <p>{{ $pokemon->name }} lvl-</p>
                        <p>{{ $pokemon->level }} </p>
                    </div>

                    <div class="edit-delete" style="display:flex;">
                        <a class="edit" href="/pokemon/edit/{{ $pokemon->id }}">Edit</a>
                        <a class="delete" href="/pokemon/delete/{{ $pokemon->id }}">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</div>

</html>
