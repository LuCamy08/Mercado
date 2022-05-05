<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervisor</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encargado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style_principal.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-right align-content-right">
            <div class="col-8 barra">
                <h4 class="text-light">Supervisor</h4>
            </div>
            <div class="col-4 text-right barra">    
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="/categoria/principal"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="/loginSupervisor"><i class="fas fa-home"></i><span>Registrar Usuarios</span></a>
                    <a href="{{route('restablecer.restablecerContra')}}"><i class="fas fa-home"></i><span>Reestablecer contraseña</span></a>
                    <a href="{{route('categoriaSupervisor.viewRegistrocategorias')}}"><i class="fas fa-home"></i><span>Registrar Categorias</span></a>
                    <a href="{{route('viewcategorias.visualizarCategorias')}}"><i class="fas fa-home"></i><span>Ver Categorias</span></a>
                    <a href="/HistorialVendedor"><i class="fas fa-home"></i><span>Historialvendedor</span></a>
                </nav>
                
            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                    <div class="columna col-lg-6">
                        <h1><center> </center></h1>
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
</html>