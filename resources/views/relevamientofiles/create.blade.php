<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <title>Dar de Alta Empleados</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('index') }}" class="nav-link" href="#">INICIO</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('create') }}" class="nav-link" href="#">CREAR</a>
                </li>
                {{-- <li class="nav-item"> --}}
                {{-- <a  href="{{url('show')}}" class="nav-link" href="#">MOSTRAR</a> --}}
                {{-- </li> --}}

            </ul>
        </div>
        </div>
    </nav>
    <style>
        * {
            box-sizing: border-box;
            margin: 20px;
            padding: 1px;

            #contenedor1 {
                width: 250px;
                height: 150x;
                justify-content: center;
            }




        }
    </style>

    <center>
        <div>
            <h2>Ingrese datos del Empleado</h2>
        </div>
        <div id=contenedor1 justify-content: center;>
            <form action="{{ route('create.store') }}" method="post">
                @csrf
                <label><b> EMPLEADO </b></label>
                <input type="text" name="empleado">

                <BR>
                <label><b> SECTOR </b></label>
                <input type="text" name="sector">

                <BR>
                <label><b> DIRECCION IP</b></label>
                <input type="text" name="direccionip">

                <BR>
                <label><b>EMAIL</b></label>
                <input type="text" name="email">
                <BR>
                <label><b>LEGAJO</b></label>
                <input type="text" name="legajo">
                <BR>
                <label><b>TEL. INTERNO</b></label>
                <input type="text" name="telinterno">
                <div>
                    <br>
                    <div>
                        {{-- <button type="submit" class="btn btn-primary btn-sm"> CREAR </button> --}}
                        <button type="submit" class="btn btn-dark"> CREAR </button>
                    </div>
                    <br>

            </form>
    </center>

    </div>
</body>

</html>
