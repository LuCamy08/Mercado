<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style_principal.css">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-right align-content-right">
            <div class="col-8 barra">
                <h4 class="text-light">World Shoes</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="/login"><i class="fas fa-sign-out-alt m-1"></i>Iniciar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="#"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="/Productos_en_general"><i class="fas fa-home"></i><span>Todos los productos</span></a>
                </nav>
                
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                        <h1><center> CATEGORÍAS </center></h1>
                    </div>
                </div>

                @foreach($categorias as $categoria)
                <table class= "default">
                <tr>    
                <th><img src={{$categoria->imagen}}></th>
                <th><h2>{{$categoria->nombre}}</h2></th>
                </tr>

                <tr>
                   <th>
                    <h4><a href="{{route('productos.mostrarProductos',$categoria->id)}}"><button class="botons" type="submit"> Ver </button></a></h4>
                   </th> 
                </tr>
                </table>
                @endforeach

            </main>
        </div>
    </div>