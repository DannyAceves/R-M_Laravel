<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes Guardados</title>
</head>
<body>
    <h1>Listado de Personajes Guardados</h1>

    @foreach($characters as $character)
        <div>
            <p>Nombre: {{ $character->name }}</p>
            <p>Status: {{ $character->status }}</p>
            <p>Especie: {{ $character->species }}</p>
        </div>
        <hr>
    @endforeach
</body>
</html>
