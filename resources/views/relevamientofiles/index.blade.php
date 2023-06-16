<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Inicio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                       <a href="{{url('index')}}" class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                       <a  href="{{url('create')}}" class="nav-link" href="#">CREAR</a>
                    </li>
                    {{-- <li class="nav-item">
                       <a  href="{{url('editar/4')}}" class="nav-link" href="#">EDITAR</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                       <a  href="{{url('show')}}" class="nav-link" href="#">MOSTRAR</a>
                    </li>  --}}

                </ul>
            </div>
        </div>
        </nav>

        {{-- <table class="table table-dark">
        <table class="table table-bordered"> --}}
            <table class="table table-bordered table-dark">
                <center>
            <p style="font-family:Brush Script MT ">Revelamiento</p>
                </center>
            <h1>LISTADO DE DATOS CARGADOS</h1>

            <thead>
              <tr>
                <th scope="col">Empleado</th>
                <th scope="col">Sector</th>
                <th scope="col">Direccion IP</th>
                <th scope="col">Email</th>
                <th scope="col">Legajo</th>
              </tr>

            </thead>
            <tbody>
            @foreach ($relevamientos as $relevamientos)

            <tr>

                <td>{{$relevamientos->empleado}}</td>
                <td>{{$relevamientos->sector}}</td>
                <td>{{$relevamientos->direccionip}}</td>
                <td>{{$relevamientos->email}}</td>
                <td>{{$relevamientos->legajo}}</td>
                <td>
                    <a href="{{ url('editar/'.$relevamientos->id) }}">
                        <button type="button" class="btn btn-outline-warning">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('show/'.$relevamientos ->id) }}">
                        <button type="button" class="btn btn-outline-info">Ver</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{ url("delete/{$relevamientos->id}") }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
            </tbody>
          </table>
        <table>
            @foreach ($relevamientos as $relevamientos)
            @endforeach
        </table>

          <nav class="navbar" style="background-color: #e3f2fd;">

            <!-- Navbar content -->
          </nav>
</body>
</html>
