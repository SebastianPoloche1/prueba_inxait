<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>inicio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $( "#state_select" ).change(function() {
                $( "select option:selected" ).each(function() {
                    $( "#city_select" ).empty();
                    var posting = $.post( "/cities", $( "#customer_register" ).serialize() );
                    posting.done(function( data ) {
                        Object.keys(data).forEach(function(key) {
                            $newOption = '<option value="'+data[key]['id']+'">'+data[key]['name']+'</option>';
                            $( "#city_select" ).append($newOption)
                        })
                    })
                });
            });
        }); 
    </script> 
</head>
<body class="home">    
    <header class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid"> 
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <img class="logo" src="{{asset('img/porsche-logo.svg')}}" alt="porsche-logo">
                    </ul>
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('customer.check') }}">Consultar</a>
                    </div>
                    <div class="d-flex">                  
                        <a class="nav-link active rigth" aria-current="page" href="{{ route('admin.login') }}">Iniciar sesion</a>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="container fund">
        <br>
        <h1>REGISTRATE  PARA  PARTICIPAR !</h1>
        <section class="container">   
            <div class="col-sm-6 offset-md-3 card">
                <form id="customer_register" class="card-body form" action="{{ route('customer.save') }}" method="post">
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
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>                
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> 
                        <span class="text-danger">@error('lastname') {{ $message }} @enderror</span>                
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="personal_id" value="{{ old('personal_id') }}"> 
                        <span class="text-danger">@error('personal_id') {{ $message }} @enderror</span>               
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Departamento</label>
                        <select id="state_select" class="form-select" aria-label="Default select example" name="state">
                            <option value="" selected>Seleccionar</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>     
                        <span class="text-danger">@error('state') {{ $message }} @enderror</span>           
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad</label>
                        <select id="city_select" class="form-select" aria-label="Default select example" name="city">
                            <option value="" selected>Seleccionar</option>
                        </select>            
                        <span class="text-danger">@error('city') {{ $message }} @enderror</span>    
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular</label>
                        <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">  
                        <span class="text-danger">@error('phone') {{ $message }} @enderror</span>               
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}"> 
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>                
                    </div>                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="habeas_data" name="habeas_data" >
                        <label class="form-check-label" for="exampleCheck1">(“Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales”. Haga clic
                        aquí)</label>
                        <span class="text-danger">@error('habeas_data') {{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-dark">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>