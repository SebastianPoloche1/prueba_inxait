<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Consultar</title>
</head>
<body class="check">    
    <header class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid"> 
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <img class="logo" src="{{asset('img/porsche-logo.svg')}}" alt="porsche-logo">
                    </ul>
                    <div class="d-flex">                 
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('home') }}">Inicio</a>
                    </div>
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('admin.login') }}">Iniciar Sesion</a>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="container-fluid container fund padd">
        <br>
        <section class="container">   
            <h1 class="text-center mb-4">Consultar ganador?</h1>
            <div class="col-sm-6 offset-md-3 card">
                <form class="card-body" action="{{ route('customer.consult') }}" method="post">   
                    @csrf                                     
                    <div class="mb-3">
                        <label class="form-label">Ingresa tu número de cédula</label>
                        <input type="number" class="form-control" name="personal_id">  
                        <span class="text-danger">@error('personal_id') {{ $message }} @enderror</span>              
                    </div>  
                    <button type="submit" class="btn btn-dark">Consultar</button>
                </form>
            </div>
        </section>
        @if (Session::get('success'))
        <a href="{{ route('customer.check') }}">
            <div class="model" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" aria-label="Close"></button> 
                        </div>
                        <div class="modal-body text-center">
                            <p class="message_p">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>  
        @endif
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>