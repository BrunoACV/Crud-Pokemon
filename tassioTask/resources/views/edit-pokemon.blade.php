<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/edit-pokemon.css') }}" rel="stylesheet">

    <title>Pokemon</title>
</head>

<div class="body">

    <body>
        <div class="return">
            <a href="/pokemon/list">Return</a>
            <div>
                <div class="form">
                    <form method="POST">
                        @csrf

                        <div class="name-level-type-gender">
                            <label for="nome">Pokemon's name</label>
                            <input type="text" name="name" class="form-control" value="{{ $pokemon->name }}" />

                            <label for="nome">Level</label>
                            <input type="number" name="level" class="form-control" value="{{ $pokemon->level }}" />

                            <label for="nome">Type</label>
                            <select type="text" name="type" id="type" class="form-control" required>

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
                            <select type="text" name="gender" class="form-control" id="gender"
                                value="{{ $pokemon->gender }}" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>


                <script>
                    var text = "{{ $pokemon->type }}";
                    var select = document.querySelector('#type');
                    for (var i = 0; i < select.options.length; i++) {
                        if (select.options[i].text === text) {
                            select.selectedIndex = i;
                            break;
                        }
                    }
                </script>
                <script>
                    var text = "{{ $pokemon->gender }}";
                    var select = document.querySelector('#gender');
                    for (var i = 0; i < select.options.length; i++) {
                        if (select.options[i].text === text) {
                            select.selectedIndex = i;
                            break;
                        }
                    }
                </script>

    </body>
    <div>

</html>
