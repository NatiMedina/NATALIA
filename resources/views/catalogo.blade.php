<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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

                <a href="/usuario"><button class="btn btn-outline-success  mt-1 mb-5" type="submit">consultanos</button></a>
         
                <div class="container-fluid">
            <div class="row pt-5">
            <div class="col-sm-12 col-md-3 col-lg-3">     
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
            <h3 class="text-center">Excelencia</h3>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis soluta quaerat odio obcaecati eveniet commodi quasi rem, corrupti dicta inventore ullam officiis quos sunt adipisci, eum repellat animi quam. Distinctio soluta atque ipsum reiciendis nostrum adipisci autem modi cum qui tempore quia voluptates, blanditiis necessitatibus quibusdam earum repellendus aut mollitia?</p>
            </div>
         </div>
         </div>

        
   
</div>
</div>
<div class="container-fluid">
    <div class="row pt-4">


    <div class="col-sm-12 col-md-1 col-lg-1 pt-4 "></div>

    <div class="col-sm-12 col-md-10 col-lg-10 pt-4 "> 


    <p>total $ <label for=" "><span id="total"></span></label> </p>



    <form action="/catalogo" method="post">
    @csrf
    <table class="table-warning table-striped">
  <thead>
    <tr>
      <th scope="col" class="p-4">id</th>
      <th scope="col"class="p-4">destacados</th>
      <th scope="col"class="p-4">descripcion</th>
      <th scope="col"class="p-4">precio</th>
    </tr>
  </thead>
  <tbody>
    <tr class="row-articulo">
      <th scope="row"class="p-4 " >1</th>
      <td><img src="/img/perf1.jpeg"class="p-4" alt=""></td>
      <td id="perf1"><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio1"> 5000 </h5>
      <input type="number" min="0" name="perf1" value='0' id="cant" precio1="50" class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    <tr class="row-articulo">
      <th scope="row"class="p-4">2</th>
      <td><img src="/img/perf4.jpeg"class="p-4"></td>
      <td><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio">$7000 </h5>
      <input type="number" min="0" name="perf2" id="cant" value='0'class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    <tr class="row-articulo">
      <th scope="row"class="p-4">3</th>
      <td><img src="/img/perf5.jpeg" alt=""class="p-4"></td>
      <td><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio">$8000 </h5>
      <input type="number" min="0" name="perf3" id="cant" value='0'class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    <tr class="row-articulo">
      <th scope="row"class="p-4">4</th>
      <td><img src="/img/perf2.jpeg"class="p-4"></td>
      <td><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio">$9000 </h5>
      <input type="number" min="0" name="perf4" id="cant" value='0'class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    <tr class="row-articulo">
      <th scope="row"class="p-4">5</th>
      <td><img src="/img/perf3.jpeg" alt=""></td>
      <td><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio">$14000 </h5>
      <input type="number" min="0" name="perf5" id="cant" value='0'class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    <tr class="row-articulo">
      <th scope="row"class="p-4">6</th>
      <td><img src="/img/perf4.jpeg"class="p-4"></td>
      <td><p class="p-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa qui tenetur cupiditate sequi distinctio aliquam magnam, iure dignissimos sint maiores.</p></td>
      <td class="text-center"><h5 id="precio">$15000 </h5>
      <input type="number" min="0" name="perf6" id="cant" value='0'class="py-2 m-1"><p>
                            
                            </div></p></td>
    </tr>
    
</table>
<a href="/catalogo"><button type="submit" class="btn btn-warning m-2" class="card-link" id='boton' name="finalizarCompra">
                            <img src="/basket.svg" width="25px"heigth="25px" alt=""><br>finalizar compra</button></a>
 </form><h3>{{ $perf1 ?? '' }}</h3>
 
 
 
 
 </div>

  </div>

    </div>   </div>  
    
    
   

    @include("footer")

<body>
 

<script src="/jquery-3.6.0.min.js"></script>
  
<script src="js/funciones.js"></script>
  
<script>
$(document).ready(function(){
    
  
    
    iniciar();
    
   
  });
</script>

</script>
  <!-- var precio = $("#cant").val() * 10; -->
</body>
</html>