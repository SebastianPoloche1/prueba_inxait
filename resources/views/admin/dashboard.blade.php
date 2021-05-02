<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Dashboard</title>
</head>
<body class="dashboard">    
<header class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid"> 
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ">
                        <img class="logo" src="{{asset('img/porsche-logo.svg')}}" alt="porsche-logo">
                    </ul>
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('admin.logout') }}">Salir</a>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="container fund-2 container-media">
        <br>
        <section class="container">   
            <a class="text" href="{{ route('admin.export') }}">
                <button type="button" class="btn btn-dark margin_a">Descargar Base de Datos</button>
            </a>
            <a class="text" href="{{ route('admin.won') }}">
                <button type="button" class="btn btn-dark margin_b">Generar Ganador</button>
                @if ( $won == 'active')
                    <div class="alert alert-success">
                        <p>Se ha registrado el ganador</p>
                    </div>
                @elseif ($won == 'few')
                    <div class="alert alert-danger">
                        <p>Existen pocos registros para generar un ganador</p>
                    </div>
                @elseif ($won == 'much')
                    <div class="alert alert-danger">
                        <p>Ya no quedan posibles ganadores</p>
                    </div>
                @elseif ($won == 'error')
                    <div class="alert alert-danger">
                        <p>Ha ocurrido un error insperado, por favor intentalo mas tarde</p>
                    </div>
                @endif
            </a>
            <h1 class="text-center mb-4">Clientes Registrados</h1>
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Ganador</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->lastname }}</td>
                        <td>{{ $customer->personal_id }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $resultado = $customer->won == 1 ? 'Si' : 'No' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>     
        </section>        
    </main>
</body>
</html>