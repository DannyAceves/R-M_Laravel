<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick y Morty App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="{{ asset('js/customs.js') }}" defer></script>
</head>

<body id="bodybg">

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand text-white" href="/">
            <img src="../img/pngwing.com.png"  width="50" height="50">
            Rick & Morty App
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Personajes Guardados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form-control justify-content-center bg-transparent border-0 mt-5">
        <div class="container">
        <form class="d-flex" role="search" action="{{route('fetch-character-data')}}" method="get">
            <input name="location" id="locationId"  class="form-control me-2" type="search" placeholder="Enter Location ID" aria-label="Search" required>
            <button type="submit" class="btn btn-warning">Search</button>
        </form>
        </div>
    </div>

    <div class="container mt-3">

        <div class="row container">
            @if(isset($characters))
                @foreach($characters as $character)
                <div class="card container" style="width: 14rem; margin:10px; padding:10px;">
                    <img src="{{ $character['image'] }}" alt="Character Image" class="character-image" data-bs-toggle="modal" data-bs-target="#characterModal" data-character-info='@json($character + [' location_id'=> $locationData['id']])'>
                    <div class="card-body">
                        <h5 class="card-title">{{ $character['name'] }}</h5>
                        <p class="card-text">
                            Status: {{ $character['status'] }} <br>
                            Especie: {{ $character['species'] }} <br>
                            Origen: {{ $character['origin'] }}
                        </p>
                    </div>
                    @if(count($character['episodes']) > 0)
                    <ul class="list-group list-group-flush">
                        <p class="list-group-item">Capitulos:</p>
                        @foreach(array_slice($character['episodes'], 0, 3) as $episode)
                        <li class="list-group-item"><a href="{{ $episode }}">{{ $episode }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="card text-center" style="margin-top: 5px;">
                        <a href="#" class="btn btn-primary">Save Character</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <div class="modal fade" id="characterModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">PERSONAJE</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"><!--Carga de personajes--></div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/customs.js') }}" defer></script>

</body>
</html>