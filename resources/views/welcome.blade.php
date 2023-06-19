<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:400,700');
        *{
          font-family: 'Lato';
        }
        .container {
    max-width: 1400px;
    margin: auto;
}

.color-acento {
    color: #F2CC8F;
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
        height: 300px;
        width: 300px;
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
    #alfa .container {
        padding-top:200px;
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

<section id="somos-proya">
        <div class="container">
            <div class="">
            <img src="/iconos/pexel_andrea.png" class="img-container" alt="d1">
            </div>
            <div class="texto">
                <h2>Una <span class="color-acento">Revolucionaria</span></h2>
                <h2>forma <span class="color-acento">de Educar</span></h2>
                <p>"La educación en linea es un aprendizaje electrónico que<br>
se basa en Internet para la interacción entre profesores y alumnos y la<br>
distribución de material didáctico."</p>
            </div>
        </div>
</section>
<section id="alfa">
    <div class="container">
          <h1 class="text-center">Productos</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ipsa, veniam quaerat earum inventore dolores debitis consequuntur repellat eius impedit porr</p>
          <div class="row mt-5">
            <div class="card col-sm-4 caja">
                <img src="/iconos/Rectangle6.png" alt="">
                <h3>Marqueting Digital</h3>
                <h5>Duración: 5 Semestres(3 años)</h5>
                <h5>Modalidad: Semipresencial</h5>
                <h5>Titulación: Titulo a nombre de la Nacion</h5>
            </div>
            <div class="card col-sm-4 caja">
                <img src="/iconos/Rectangle6.png" alt="">
                <h3>Desarrollo de Software</h3>
                <h5>Duración: 5 Semestres(3 años)</h5>
                <h5>Modalidad: Semipresencial</h5>
                <h5>Titulación: Titulo a nombre de la Nacion</h5>
            </div>
            <div class="card col-sm-4 caja">
                <img src="/iconos/Rectangle6.png" alt="">
                <h3>Diseño Grafico</h3>
                <h5>Duración: 5 Semestres(3 años)</h5>
                <h5>Modalidad: Semipresencial</h5>
                <h5>Titulación: Titulo a nombre de la Nacion</h5>
            </div>
          </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>