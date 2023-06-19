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
        #somos-proya .container {
        display: flex;
        justify-content: space-evenly;
    }
    #somos-proya .texto {
        width: 50%;
        max-width: 600px;
        text-align: initial;
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #somos-proya h2 {
        margin-top: 0px;
    }
    #somos-proya .img-container {
        /*background-image: url("imagenes/Pnosotros/{$Pnosotros->imagen}");*/
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px;
        border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
    }
    /* Proya 2  */
    #somos-proya2 .container {
        display: flex;
        justify-content: space-evenly;
    }
    #somos-proya2 .texto {
        width: 50%;
        max-width: 600px;
        text-align: initial;
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #somos-proya2 h2 {
        margin-top: 0px;
    }
    #somos-proya2 .img-container {
        /* background-image: url("imagenes/Pnosotros/{$Pnosotros->imagen2}");*/
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.8);
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px;
        border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

    }
    /* Proya 3 */
    #somos-proya3 .container {
        display: flex;
        justify-content: space-evenly;
    }
    #somos-proya3 .texto {
        width: 50%;
        max-width: 600px;
        text-align: initial;
        padding-left: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #somos-proya3 h2 {
        margin-top: 0px;
    }
    #somos-proya3 .img-container {
        /*background-image: url("imagenes/Pnosotros/{$Pnosotros->imagen3}");*/
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        background-size: cover;
        background-position: center center;
        height: 500px;
        width: 400px;
        border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

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
<!-- Aqui va la mision, vision y objetivo y los docentes -->
<section id="somos-proya">
        <div class="container">
            <div class="">
            <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen}}" class="img-container" alt="d1">
            </div>
            <div class="texto">
                <h2>Nuestra <span class="color-acento">{{$Pnosotros->titulo}}</span></h2>
                <p>{{$Pnosotros->texto}}</p>
            </div>
        </div>
</section>
<section id="somos-proya2">
        <div class="container">
                <div class="texto">
                <h2>Nuestra <span class="color-acento">{{$Pnosotros->titulo2}}</span></h2>
                <p>{{$Pnosotros->texto2}}</p>
                </div>
                <div class="">
                <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen2}}" class="img-container" alt="d1">
                </div>
        </div>
</section>
<section id="somos-proya3">
        <div class="container">
            <div class="">
            <img src="/imagenes/Pnosotros/{{$Pnosotros->imagen3}}" class="img-container" alt="d1">
            </div>
            <div class="texto">
                <h2>Nuestro <span class="color-acento">{{$Pnosotros->titulo3}}</span></h2>
                <p>{{$Pnosotros->texto3}}</p>
            </div>
        </div>
</section>
<section class="w-100 py-1 d-flex justify-content-center align-items-center mt-5" style="">
        <div class="container">
                <div class="text-center">
                    <h1 class="fw-bold display-5">Nuestros Docentes de "Tecnobots Perú"</h1>
                </div>
            <div class="row">
             @foreach($Pdocente as $Pdoce)
                <div class="col-12 col-md-4">
                    <div class="card mx-auto d-block" style="">
                            <div class="w-100 bg-light" style="height:100px;">

                            </div>
                       <div class="r_ima1" style="">
                       <img src="/imagenes/Pdocente/{{$Pdoce->imagen}}" class="card-img-top rounded-circle mx-auto d-block bg-light" style="width:150px; height:150px;position: absolute;margin-top:-90px;" alt="...">

                       </div>
                            
                            

                            <div style="background-color:#952f57; height:40px; display:float;" class="w-100">

                            </div>
                        <div class="card-body text-center text-light pt-3" style="background-color:#952f57;">
                                <h5 class="card-title pt-3">{{$Pdoce->cargo}}</h5>
                                <p class="card-text">{{$Pdoce->nombre}}</p>
                                     <div class="d-flex d-inline justify-content-center">
                                        <a href="https://www.facebook.com/graciela.molinadelrio/" class="mr-5 d-inline">
                                            <img src="{{url("/imagenes/ICONOS_UTILIZADOS/face3.png")}}" style="width:50px; height:30px;" alt="">
                                        </a>
                                       
                                    </div>
                                
                        </div>
                    </div>    
                </div>
              @endforeach    
            </div>
        </div>  
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>