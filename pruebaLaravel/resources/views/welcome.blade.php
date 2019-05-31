<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
     <title>TuxFiestas</title>

    

    <!-- Bootstrap core CSS -->
<!--<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <div>
    <a class="py-2" href="#">
      <img src="https://img.icons8.com/cotton/64/000000/party-baloons.png">
    </a>
    <a class="py-4 d-none d-md-inline-block" href="#">TuxFiestas</a>

       <a class="py-2" href="#">
      <img src="https://img.icons8.com/cotton/64/000000/party-baloons.png">
  </a>
    </div>
    <a class="py-4 d-none d-md-inline-block" href="{{ route('clientes.index') }}">Iniciar sesiòn</a>
    <a class="py-4 d-none d-md-inline-block" href="{{ route('register') }}" >Registrase</a>
    <a class="py-4 d-none d-md-inline-block" href="{{ url('paquetes')}}">Paquetes</a>
    <a class="py-4 d-none d-md-inline-block" href="{{ route('clientes.index') }}">clientes</a>

   

 
    

  </div>

</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Suscribirse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAceptar">Aceptar</button>
      </div>
    </div>
  </div>
</div>



<!--<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="row">
  <div>
    <img src="fon.jpg" class="img-fluid" alt="Responsive image" />
    <div class="row">
      <div class="col-md-5  mx-auto ">
       <h1 class="display-4 font-weight-normal">Cuidado Personal</h1>
    <p class="lead font-weight-normal">Una piel bonita paso a paso</p>
    <a class="btn btn-outline-secondary" href="#">Conoce tu piel</a>
      </div>
    </div>
  </div>
</div>
</div> el bueno -->

<div class="bd-example">
  <div class="carousel slide pointer-event" id="carouselExampleCaptions" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carouselExampleCaptions"></li>
      <li data-slide-to="1" data-target="#carouselExampleCaptions"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
     <!--   <img class="d-block w-100" alt="First slide [900x300]" src="fon.jpg" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" data-holder-rendered="true">-->
        <img class="d-block w-100" alt="First slide [900x300]" src="fi.jpg" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" data-holder-rendered="true">
        <div class="carousel-caption d-none d-md-block">
          <div class="col-md-4   my-4 "> <!--Se quito el mx-auto de en medio-->
    <h1 class="display-4 font-weight-normal text-gray-dark">Unete a la aventura</h1>
    <p class="lead font-weight-normal text-white">Crea tu fiesta en casa.</p>
    <div>
    <a class="btn btn-outline-secondary text-white" href="{{ url('paquetes')}}">Ver màs</a>
    </div>
    </div>
         <!-- <h3>First slide label</h3>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
        </div>
      </div>
      
  </div>
</div>

<!-- 
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Cuidado Personal</h1>
    <p class="lead font-weight-normal">Una piel bonita paso a paso</p>
    <a class="btn btn-outline-secondary" href="#">Conoce tu piel</a>
    </div>
  <div>
    <img src="fon.jpg" class="img-fluid" alt="Responsive image" />
  </div>-->
  <!--<div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> 
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">S-age advance</h2>
      <p class="lead">Crema de colageno con antioxidantes.</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 70%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="qqqq.png" class="img-fluid" alt="Responsive image" />
    </div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Newen natural </h2>
      <p class="lead">Crema de colageno de rosa mosqueta</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 70%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="asss.png" class="img-fluid" alt="Responsive image" />
    </div>
  </div>
</div> -->



<footer class="container py-5">
  <div class="row">


    <div class="col-6 col-md">
      <h5>!!Gracias por tu visita!!. -Creado por:</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Sunny Madai Ruiz Velasco</a></li>
        <li><a class="text-muted" href="#">Evelyn Castilla Diaz</a></li>
        <li><a class="text-muted" href="#">Alan Hair Martinez Estrada</a></li>
  </div>
  <div class="col-12 col-md">
          <img src="https://img.icons8.com/color/96/000000/heart-balloon.png" class="img-fluid" alt="Responsive image">
          <small class="d-block mb-3 text-muted">&copy;   TuxFiestas-2019</small>
      </div>

    
  </div>
 
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
  
  $("#btnAceptar").click(function ( event ) {
    var email = $("#exampleInputEmail1").val();
    $.post("/respuesta.php", {email:email},function(data){
      console.log(data);
      var obj = JSON.parse(data);
      alert(obj.id);
      alert("Gracias por suscribirte");
    });
  } );



</script>


      </body>
</html>
