<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNOBOTS PERU" | @yield('title')</title>
    <link rel="icon" href="{{url("/iconos/logo_1.png")}}">
    @yield('css')
    <link rel="stylesheet" href="/css/enge/engels.css">
    <link rel="stylesheet" href="/css/enge/administrador.css">
    <link rel="stylesheet" href="/css/enge/datatables/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/enge/datatables/select.bootstrap5.min.css">
    <link rel="stylesheet" href="/css/enge/datatables/responsive.bootstrap.min.css">
<!-- Aqui va de la otra pagina -->
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/style_100.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <!-- cdn de font icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body class="bg-light">

@include('templates.nav1')

<!-- principal -->
<div class="bg-dark d-flex justify-content-end bd-highlight">
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                
                            @endif
                        @else
                            <div class="lista">
                                <a class="text-light" href="#"><i class="bi bi-person-badge me-2"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            </div>
                       <!-- Aqui va otro codigo -->
                       <li class="mx-5 ">
                                
                               
                                    <a class="text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                        <span>
                                        <i class="bi bi-circle text-danger me-2"></i>
                                        </span>
                                        <span class="text-light">            
                                        Cerrar Sesion
                                        </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="form-inline my-2 my-lg-0">
                                        @csrf
                                    </form>
                            
                            </li>
                       

                        @endguest
                     </div>

            <div class="container-fluid mb-5 py-5">
               @yield('content')
            </div>
        <!-- fin principal -->
        </main>
    <!-- fin contenido -->
     
        <!-- footer  -->
        <footer class="footer pb-0 fixed-bottom bg-white shadow-lg mt-5 pt-3 border-top">
            <div class="container-fluid">
                <div class="row pb-2">
                    <div class="col-12 col-md-4 d-none d-md-block">
                        <small class="text-muted text-uppercase">Desarrollado Por  <span class="text-group text-capitalize">Cuantica Group S.A.C</span></a></small>
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-end">
                        <span class="float-end">Copyright © <?php echo date("Y");?>  <a href="" class="text-decoration-none text-primary fw-bold" target="bank">"Tecnobots Perú"</a> - Todos los derechos Reservados - <small class="text-muted">version 1.0</small></span>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- fin footer -->
       
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/datatables/jquery.dataTables.min.js"></script>
    <script src="/js/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="/js/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/js/datatables/dataTables.responsive.min.js"></script>
    @yield('js')

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

    <script>
        $(document).ready(function() {
            $('table.display').DataTable( {
                responsive: true,
                fixedHeader: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontró nada, lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate":{
                        "next": "&raquo;",
                        "previous": "&laquo;"
                    } 
                }
            } );
        new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
</body>
</html>
