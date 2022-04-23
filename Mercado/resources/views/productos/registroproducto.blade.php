<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registrar</title>
    <link rel="stylesheet" type="text/css" href="pubic/css/agregarpro.css">


	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
     <form class="col-12" action="{{route('productos.registrarProductos')}}" method="POST">
        <b><h1><center>Registar producto</center></h1></b>
        <br>
        
        @csrf
        <div class="modal-dialog text-center"><center>

          <div class="col-sm-8">
              <div class="form-group">
                  <div class="modal-content">
                <br>

                    <label >
                          Nombre:
                         <input type="text"class="form-control" placeholder="Nombre" name="nombre">
                    </label>
                        <br>
                     <label>
                        Descripcion:
                         <br>
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion" rows="5"></textarea>
                    </label>
                    <br>
                    <label>
                        Precio:
            
                         <input type="text"  class="form-control" name="precio">
                    </label>
                    <br>
                    <label>
                         Imagen:
                        <input type="file"class="form-control" name="imagen">
                    </label>
                    <br>
                     <br>
                    <label>
                        Consecionado:
            
                        <input type="text" class="form-control" name="concesionado">
                    </label>
                    <br>
                    <label>
                        Motivo:
            
                        <input type="text" class="form-control" name="motivo">
                    </label>
                    <br>
                    <label>
                        Existencia:
            
                         <input type="text" class="form-control" name="existencia">
                     </label>
                    <br>
                    <label>
                        Pendientes:
            
                         <input type="text" class="form-control" name="pendientes">
                    </label>
                    <br>
                    <label>
                        Procentaje:
                        
                        <input type="text" class="form-control" name="porcentajeManejo">
                    </label>

                     <br>
                
                     <button type="submit" class="btn btn-primary"><i class="fas fa-registered"></i>  Registrar</button>
              
                  </div>
                    </div>
                </center> </div>
        

    </form>
</body>
</html>