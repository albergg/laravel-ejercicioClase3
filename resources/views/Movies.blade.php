<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h2>estamos en movies view</h2>
    

        <ul>
        @foreach ($movies as $movie)
        <li><b>{{$movie->title}}</b></br> Rating: {{$movie->rating}}</li>
        <a href="/movies/detail/{{$movie->id}}" class="btn btn-primary">Ver mas informacion</a>
        @endforeach;
    </ul>
</body>
</html>