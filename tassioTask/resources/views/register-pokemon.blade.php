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

    <form method="POST" action="/pokemon/register">
        @csrf

        <div>

            <label for="nome">Pokemon's name</label>
            <input type="text" name="name" id="name" class="form-control" required />


            <label for="nome">Level</label>
            <input type="number" name="level" id="level" class="form-control" required />


            <label for="nome">Type</label>
            <input type="text" name="type" id="type" class="form-control" required />


            <label for="nome">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control" required />
            <button type="submit" class="btn-hover color-9 ">
                Cadatrar
            </button>
        </div>


    </form>

</body>

</html>
