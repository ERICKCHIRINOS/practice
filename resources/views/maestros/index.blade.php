<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestros</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar sm:navbar-expand bg-1 fg-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Welcome</a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarNavLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('materias.index') }}">Materias</a>
                        </li>
                    </ul>
                </div>
            </dialog>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Titulo</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($maestros as $maestro)
            <tr>
                <th scope="row">{{$maestro->id}}</th>
                <td>{{$maestro->nombre}}</td>
                <td>{{$maestro->email}}</td>
                <td>{{$maestro->telefono}}</td>
                <td>{{$maestro->titulo}}</td>
                <td>{{$maestro->fecha_nacimiento}}</td>
                <td>{{$maestro->estado}}</td>
            </tr>
            @empty
                <tr>No hay Registros</tr>
            @endforelse
        </tbody>


</body>

</html>
