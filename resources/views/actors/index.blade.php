<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>actors index</h2>
    <ul>
        @foreach ($actors as $oneActor)
    <li>{{$oneActor->getFullName()}}</li>
        <button type="button" class="btn btn-primary">ver mas</button>
        @endforeach;
        
    </ul>
</body>
