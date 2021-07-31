<!doctype html>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Buscar Trabajo</title>
  </head>



  <body style="background: #393E46">


    <header><!-- Nav Bar-->
                
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #00ADB5; " >
            <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: #02475E;" >Busca Trabajos</a>
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
                    <a class="nav-link"  href="{{route('mostrar_perfil')}}" style="color:#AAD8D3">Mostrar Pefil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('crear_perfil')}}" style="color:#AAD8D3">Crear Perfil</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        
    </header>


    <main class="container-fluid" >

        @yield("contenido")

        
    </main>
  </body>
</html>