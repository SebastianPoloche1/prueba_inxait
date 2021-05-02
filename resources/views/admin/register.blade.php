<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Registrarse</title>
</head>
<body class="register">    
    <header class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid"> 
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            <img class="logo" src="{{asset('img/porsche-logo.svg')}}" alt="porsche-logo">
                        </a>
                    </ul>                    
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('admin.login') }}">Iniciar Sesion</a>
                    </div>
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('admin.register') }}">Registrarse</a>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="container fund">
        <br>
        <h1>REGISTRAR ADMINISTRADOR</h1>
        <section class="container">   
            <div class="col-sm-6 offset-md-3 card">
                <form class="card-body" action="{{ route('admin.save') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre completo" value="{{ old('name') }}">   
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>             
                    </div>                    
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}">     
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>           
                    </div>   
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">  
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>              
                    </div> 
                    <div class="mb-3">
                        <label class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="confirm_password">  
                        <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>              
                    </div>                   
                    
                    <button type="submit" class="btn btn-dark">Registrarse</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>