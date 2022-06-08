<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <a href="/">Return</a>
    <br>

    @foreach ($pokemons as $pokemon)
        {{ $pokemon->name }}
        {{ $pokemon->level }}

        <a class="linkEdit" href="/pokemon/edit/{{ $pokemon->id }}">(Edit)</a>
        <a href="/pokemon/delete/{{ $pokemon->id }}"> (Delete) </a>


        <br>
    @endforeach


</body>

</html>
