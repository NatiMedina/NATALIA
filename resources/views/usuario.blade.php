<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.css') }}">
</head>

<body style="background-color:#7952b3; font-family:verdana;">
    <div class="container-fluid bg-white">
            <ul class="nav justify-content-center pt-5">
                <li class="nav-item">
                    <a class="nav-link px-5;" href="/"><h4>BIENVENIDOS</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="/producto"><h4>Producto</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="/contacto"><h4>Contacto</h4></a>
                </li>

            
            
            <a href="/bienvenidos"><button class="btn btn-outline-success  mt-1 mb-5" type="submit">volver</button></a>

            
         

   
</div>
</div>

<div class="container-fluid">
            <div class="row pt-5">
            <div class="col-sm-12 col-md-3 col-lg-3">     
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <h3>Consultanos</h3>
    
            <form action="/usuario" method="POST" id="datos">
                    @csrf
                <input type="text"class="form-control" placeholder="ingresar nombre"  name="nombre" id='nombre'><br>
                <input type="text"class="form-control" placeholder="ingresar telefono" name="telefono" id= "telefono" ><br>
                <input type="text" class="form-control" placeholder="ingresar email" name="email"  style="margin-top: 5px"id= "mail" ><br>
                <button class="btn btn-secondary mt-3" id="boton">enviar</button>
            </form>
                <br>
                <br>
                <br>
                <br>

@if($nombre ?? '' )
    <p>gracias {{ $nombre }}</p>

@endif 

            </div>
         </div>
         </div>







</div>
@include("footer")
<body>
 

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('/js/funciones.js') }}"></script>
<script>
    $(document).ready(function(){
        login();
    });
</script>
</body>
</html>