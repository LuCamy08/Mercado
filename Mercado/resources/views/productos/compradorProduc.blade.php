<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    @foreach($categoria->productos as $producto)
        @if($producto->concesionado == 1)
                        
        <table class= "default">
            <tr>    
            <th><{{$producto->nombre}}></th>
            </tr>

            <tr>
            <th>{{$producto->descripcion}}</th>
            </tr>

            <tr>
            <th>{{$producto->precio}}</th>
            </tr>

            <tr>
            <th><img src = {{$producto->imagen}} width = "60px"></th>
            </tr>

            <tr>
            <th> {{ $producto->existencia }}</th>
            </tr>
            
            <tr>
                <th> <button><a href="">Comprar</a></button></th>
            </tr>

            <tr>
                <th> <button><a href="">Preguntar</a></button></th>
            </tr>
            
        </table>
        @endif
    @endforeach
</body>
</html>