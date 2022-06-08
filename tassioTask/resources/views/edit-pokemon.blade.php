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

    <form method="POST">
        @csrf

        Name: <input type="text" name="name">
        <br>
        Level: <input type="number" name="level">
        <br>
        Type: <input type="text" name="type">
        <br>
        Gender: <input type="text" name="gender">
        <br>
        <br>
        <button type="submit">Update</button>

    </form>



</body>

</html>
