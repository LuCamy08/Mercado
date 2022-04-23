<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    @foreach($productos as $producto)
    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Concesionado:</strong>
                            {{ $producto->concesionado }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $producto->motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Pendientes:</strong>
                            {{ $producto->pendientes }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentajemanejo:</strong>
                            {{ $producto->porcentajeManejo }}
                        </div>
@endforeach
</body>
</html>