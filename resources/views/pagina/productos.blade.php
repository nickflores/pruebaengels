<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
         @import url('https://fonts.googleapis.com/css?family=Lato:400,700');
        *{
          font-family: 'Lato';
        }
        #encabezado{
          padding-top:100px;
          padding-left:150px;
          padding-bottom:150px;
          background-color:#4682B4;
        }
        #encabezado h1{
          font-size:60px;
          color:#fff;
        }
        #encabezado p{
          font.size:14px;
          width:600px;
          color:#fff;
        }
    #alfa{
      padding-top:0px;
    }
    #alfa .container {
        padding-top:150px;
        padding-left:150px;
        padding-right:150px;
    }
    #alfa .container p{
        padding-left:220px;
        padding-right:220px;
        text-decoration:justify;
    }
    #alfa h1{
        color:#176EAA;
        font-weight:bold;
        text-align:left;
    }
    #alfa .caja{
        /**border-color:#000;
        border:1px solid;**/
        padding-left:30px;
        padding-top:30px;
        padding-right:30px;
        padding-bottom:20px;
    }
    #alfa img{
        width:310px;
        height:240px;
    }
    #alfa .caja h3{
      color:#176EAA;
      text-align:center;
      font-size:24px;
      margin-top:14px;
    }
    #alfa .caja h5{
      color:#ODODOD;
      font-size: 14px;
      text-align:center;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="font-family: 'Inter','Poppins';background-color:#4682B4;color:#0D0D0D;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('index')}}">
    <div class="d-flex align-content-center">
   
<img src="{{url("/iconos/logo_1.png")}}" class="d-inline bg-light" style="width:200px; height:50px;margin-left:150px;" alt="">
<h4 class="d-inline ps-3  display-4 fw-bold pt-3" style="font-family: 'Inter','Poppins';color:#fff;font-size:20px;">Tecnobots Perú</h4>
</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarSupportedContent" style="margin-right:150px;">
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link fw-bold " href="{{url('nosotros_')}}"><h2 class="" style="font-family: 'Inter','Poppins';color:#fff;font-size:16px;">Nosotros</h2> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{url('productos_')}}"><h2 class="" style="font-family: 'Inter','Poppins';color:#fff;font-size:16px;margin-left:15px;">Productos</h2>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{url('cursos_')}}"><h2 class="" style="font-family: 'Inter','Poppins';color:#fff;font-size:16px;margin-left:15px;">Cursos</h2>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{url('proyectos_')}}"><h2 class="" style="font-family: 'Inter','Poppins';color:#fff;font-size:16px;margin-left:15px;">Proyectos</h2>
          </a>
        </li>
        <li class="nav-item">
         <div class="d-flex">
             <img src="{{url("/iconos_imagenes/whatsapp_2.png")}}" class="d-inline rounded-circle" style="width:20px;height:16px;margin-top:11px;margin-right:-7px;margin-left:15px;"alt="">  
               <a class="nav-link d-inline fw-bold" href="{{url('contactenos_')}}"><h2 class="" style="font-family: 'Inter','Poppins';color:#fff;font-size:16px;margin-left:0px;">Contáctenos</h2>
               </a>

         </div>   
        </li>
        <li class="nav-item">
        <form method="GET" action="{{ url('intranet_') }}">
        <button style="background-color:#7F97F9;color:#fff;border-radius: 10px;padding:5px 15px;margin-left:15px;font-family: 'Inter','Poppins';font-size 17px;border-color:#7F97F9;">Iniciar Sesión</button>
        </form>
      </li>
      </ul>
      
    </div>
  </div>
</nav>
<section id="encabezado">
  <h1>Productos en Venta</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat optio beatae quas quam labore, cum magni molestias earum delectus dolore animi molestiae itaque explicabo similique officia blanditiis aspernatur odit tempore!</p>
</section>
<section id="alfa">
    <div class="container">
          <h1 class="">Productos</h1>
          
          <div class="row mt-5">
          @foreach($Pproducto as $producto)
            <div class="card col-sm-4 caja">
                <img src="/imagenes/Pproducto/{{$producto->imagen}}" alt="">
                <h3>{{$producto->titulo}}</h3>
                <h5>{{$producto->dato1}}</h5>
                <h5>{{$producto->dato2}}</h5>
                <h5>{{$producto->dato3}}</h5>
            </div>
            @endforeach
          </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>