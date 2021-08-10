<!doctype html>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}"> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
    <link rel="stylesheet" href="{{asset('css/stylebuscar.css')}}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{('lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    
    
    <title>Buscar Trabajo</title>

  </head>



  <body style="background: #393E46">


    <header><!-- Nav Bar-->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        soporte.buscartrabajo@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +56986439424
                    </div>
                </div>
            </div>
        </div>        
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #00ADB5; " >
            <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #02475E;" >Busca Trabajo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}" style="color: #AAD8D3" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('buscar_trabajo')}}" style="color:#AAD8D3">Buscar Trabajo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('crear_publicacion')}}" style="color:#AAD8D3">Crear Publicacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('crear_perfil')}}" style="color:#AAD8D3">Perfil</a>
                </li>
                </ul>

                
            </div>
            </div>
        </nav>
        
    </header>


    <main class="container-fluid" >

        @yield("contenido")

    </main>


        


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('javascript/axios_config.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/slick/slick.min.js')}}"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset('javascript/main.js')}}"></script>
    <script src="{{asset('javascript/publicacion.js')}}"></script>

    @yield("javascript")


    </body>



</html>