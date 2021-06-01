<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="css/bootstrap-4.6.0-dist/css/bootstrap.min.css">
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
    
            <form action="/usuario" method="post">
            @csrf
        <input type="text"class="form-control" placeholder="ingresar nombre" name="nombre"><br>
        <input type="text"class="form-control" placeholder="ingresar telefono" name="telefono"><br>
        <input type="text" class="form-control" placeholder="ingresar email" name="dni" style="margin-top: 5px"><br>
        <button class="btn btn-secondary mt-3  " type="submit">enviar</button>
        </form>
        <br>
        <br>
        <br>
        <br>

        <p class="text-hidden"><h3>{{ $nombre ?? '' }}</h3> en breve estaremos respondiendo sus inquietudes o sugerencias. Gracias por elegirnos!</p>

    

            </div>
         </div>
         </div>







</div>
@include("footer")
<body>
 

<script src="/jquery-3.6.0.min.js"></script>


</script>
</body>
</html>