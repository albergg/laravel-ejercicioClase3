<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>estamos en actors view</h2>
    <br>
    <h2>Listado de actores</h2>
    <ul>
        @foreach ($actors as $oneActor)
    <li>{{$oneActor->getFullName}}</li>
    </ul>

</body>
</html>