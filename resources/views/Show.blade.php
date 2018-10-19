<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Show</h2>
        
    <h2>{{ $movie->title }}</h2>
	<p><b>Length:</b> {{ $movie->length ?? 'Sin duración' }}</p>
	<p><b>Rating:</b> {{ $movie->rating }}</p>
	<p><b>Awards:</b> {{ $movie->awards }}</p>
	<a href="/movies" class="btn btn-info">volver</a>
</body>
</html>