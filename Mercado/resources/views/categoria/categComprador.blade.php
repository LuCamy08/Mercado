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
                <h4 class="text-light">Categorias</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
            </div>
            <main class="main col">
                @foreach($categorias as $categoria)
                <table class= "default">
                <tr>    
                <th><img src={{$categoria->imagen}}></th>
                <th><h2>{{$categoria->nombre}}</h2></th>
                </tr>

                <tr>
                   <th>
                    <h4><a href="/productos"><button class="botons" type="submit"> Ver </button></a></h4>
                   </th> 
                </tr>
                </table>
                @endforeach

            </main>
        </div>
    </div>