<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <title>Pagina Editar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="{{url('index')}}" class="nav-link" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                    <a  href="{{url('create')}}" class="nav-link" href="#">CREAR</a>
                    </li>
                    {{-- <li class="nav-item"> --}}
                    {{-- <a  href="{{url('show')}}" class="nav-link" href="#">MOSTRAR</a> --}}
                    {{-- </li> --}}
            
                </ul>
            </div>
        </div>
    </nav> 
    <h1>Editar los  datos de su Agenda</h1>
    <center>
        <form action="{{ url('update/'.$relevamientos-> id) }}" method="post" >
            @csrf
            @method('put')
                
                <h2>Empleado</h2>
                <input type="text" name="empleado" value="{{ $relevamientos -> empleado}}">
                <h2>Sector</h2>
                <input type="text" name="sector" value="{{ $relevamientos -> sector}}">
                <h2>Direccion IP</h2>
                <input type="text" name="direccionip" value="{{ $relevamientos -> direccionip}}">
                <h2>Email</h2>
                <input type="text" name="email" value="{{ $relevamientos-> email}}">
                <h2>Legajo</h2>
                <input type="text" name="legajo" value="{{ $relevamientos-> legajo}}">
                <h2>Telefono Interno</h2>
                <input type="text" name="telinterno" value="{{ $relevamientos-> telinterno}}">
                <br><br>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
                
        </form>
    </center>
</body>
</html>