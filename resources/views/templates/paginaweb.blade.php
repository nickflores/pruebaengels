<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        a:link, a:visited, a:active {
            text-decoration:none;
            }
        @media (min-width: 3000px) {
            .altura {
                height: 75vh;
            }
        }
   /* Aqui va el responsive */
   @media only screen and (min-width:0px) and (max-width:576px){
    .r_ima1{
        margin-left:140px;
    }
    .mostrar{
        visibility:hidden;
        display:none;
    }
    .mostrar2{
        margin-left:0px;
    }
    .margent_ima{
        margin-top:15px;
    } 
    .r_ima1{
        margin-left:140px;
    }
   
}
@media only screen and (min-width:576px) and (max-width:1700px){
    .margent_ima{
        margin-top:250px;
    }
    .prime1{
        margin-left:0px;
    }
    .prime2{
        margin-left:0px;
    }
    .segu1{
        margin-left:-50px;
    }
    .segu2{
        margin-left:-100px;
        margin-top:-150px;
    }
    .terci1{
        margin-left:50px;
        margin-top:-100px;
    }
    .terci2{
        margin-left:-80px;
    }
   .r_ima1{
    margin-left:100px;
   }
}
   /* Fin del responsive */
  /*Este es el ejemplo mezcla de colores */
  
  .bgplomo2{
    width: 700px;
    height: 1000px;
    background: rgb(36,0,10);
    background: linear-gradient(90deg, rgba(36,0,10,0.6587009803921569) 0%, rgba(113,108,69,0.8407738095238095) 52%, rgba(179,68,104,0.8295693277310925) 85%);    
    }
    .bgplomoT{
    background: rgb(36,0,10);
    background: linear-gradient(90deg, rgba(36,0,10,0.6587009803921569) 0%, rgba(113,108,69,0.8407738095238095) 52%, rgba(179,68,104,0.8295693277310925) 85%);    
    } 
   .bgplomo3{
    width: auto;
    height: auto;
    background: rgb(71,99,99);
    background: linear-gradient(0deg, rgba(71,99,99,1) 4%, rgba(196,45,122,0.8631827731092436) 79%);
   } 
   .bgplomo4{
    width: auto;
    height: auto;
    background: rgb(180,58,140);
background: linear-gradient(90deg, rgba(180,58,140,1) 0%, rgba(253,251,29,1) 34%, rgba(131,127,122,1) 100%); 
}
  /*Fin de mezcla de colores */
    </style>

</head>

<body>

<section class="w-100 my-3 d-flex align-items-center justify-content-end" style="height: 50px; background-color:#4682B4;">
            
            <div class="text-center mostrar" style="color:#FFFFFF; margin-left:0px;">
                <img src="{{url("/iconos/logo_1.png")}}" style="width: 80px;; height: 25px;"  alt="">
                BIENVENIDO A LA INTRANET
            </div>
            
            
        </section>        
<nav class="navbar navbar-expand-lg" style="background-color:#FFFFFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('index')}}">
    <div class="d-flex align-content-center">
    <h4 class="d-inline ps-3  display-4 fw-bold pt-3" style="color:#E3E3E3;">TECNOBOTS PERU</h4>
<img src="{{url("/iconos/logo_1.png")}}" class="d-inline bg-light mt-4" style="width:150px; height:60px;margin-left:20px;" alt="">

</div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end"" id="navbarSupportedContent">
      
    </div>
  </div>
</nav>
<!-- Aqui va el cuerpo de la pagina -->
@yield('content')
<!--Fin del cuerpo de la pagina -->
        <footer>
            <div class="row mt-3 py-4" style="background-color:#4682B4;">
               <div class="container">
                <div class="d-flex align-content-center justify-content-center" style="font-family:Arial Narrow, sans-serif;">
                    <img src="{{url("/iconos/Ellipse_50.png")}}" class="d-inline bg-light rounded-circle" style="width:80px; height:80px;">
                    <h1 class="display-5 text-center text-light fw-bold d-inline mx-3">Intranet - Ingreso</h1>
                </div>
                
                <div class="row" style="font-family:Arial Narrow, sans-serif;">
                
                </div>
                </div>
            </div>
        </footer>           


    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>