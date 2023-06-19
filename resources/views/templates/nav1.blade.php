    <!-- sidebar -->      
    <div class="offcanvas offcanvas-start  sidebar-nav border-0 shadow" tabindex="-1" id="offcanvasmenu" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body p-0">
            <nav class="navbar-white">
                <ul class="navbar-nav">
                    <li>
                        <div class="user-info border-0 mb-0">
                            <div class="text-center pt-2">
                                <img src="{{url("/iconos/logo_1.png")}}" class=" mx-auto" style="width: 150px;height:50px;margin-top:100px;" alt="">
                            </div>
                            <div class=" py-2 text-center">

                            <!-- Aqui va la imagen del usuario que se ha logueado -->

                            </div>
                            <div class="text-center">
                                <span class="fw-light text-white text-uppercase d-inline-block  text-truncate">
                                    {{Auth::user()->name}}
                                </span>
                            </div>
                        </div>
                    </li>

                    <div class="pt-3">
                        
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">Administrador</div>
                        </li>
                        <li class="mx-2 my-1">
                        <a href="{{url('info_empre')}}" class="nav-link px-3 {{ request()->is(['perfil*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                <i class="bi bi-building me-2"></i>
                                </span>
                                <span>
                                    Información de la Empresa
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                        <a href="{{url('sobre_nosotros_')}}" class="nav-link px-3 {{ request()->is(['sobre_nosotros*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                <i class="bi bi-person-badge me-2"></i>
                                </span>
                                <span>
                                    Sobre Nosotros
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                            <a href="{{url('productos')}}" class="nav-link px-3 {{ request()->is(['productos*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-boxes me-2"></i>
                                </span>
                                <span>
                                    Nuestros Productos
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                            <a href="{{url('cursos')}}" class="nav-link px-3 {{ request()->is(['cursos*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-award me-2"></i>
                                </span>
                                <span>
                                    Cursos y Capacitaciones
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                            <a href="{{url('proyectos')}}" class="nav-link px-3 {{ request()->is(['proyectos*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-journal-arrow-up me-2"></i>
                                </span>
                                <span>
                                    Nuestros Proyectos
                                </span>
                            </a>
                        </li>

                        
                        <li class="mx-2 my-1">
                            <a href="{{url('admin-correos')}}" class="nav-link px-3 {{ request()->is(['admin-correos*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-people me-2"></i>
                                </span>
                                <span>
                                    Contactenos
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                            <a href="{{url('plana_docente')}}" class="nav-link px-3 {{ request()->is(['plana_docente*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-question-circle me-2"></i>
                                </span>
                                <span>
                                    Docentes
                                </span>
                            </a>
                        </li>

                        <li class="mx-2 my-1">
                            <a href="{{url('variado')}}" class="nav-link px-3 {{ request()->is(['variado*'])? 'active-item' : null}} menu">
                                <span class="fw-bold">
                                    <i class="bi bi-mailbox me-2"></i>
                                </span>
                                <span>
                                    Banners Principales
                                </span>
                            </a>
                        </li>

                       
                    </div> 
                </ul>
            </nav>
        </div>
    </div>
    <!-- fin sidebar -->
    
    <!-- contenido -->
    <main>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-primary bg-nav shadow-sm fixed-top mb-5">
            <div class="container-fluid">
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmenu" aria-controls="offcanvasmenu">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="ms-auto d-flex">
                    
                        <a class="nav-link  text-white" href="#"  role="button"  aria-expanded="false">
                            <i class="bi bi-person-fill"></i>  {{Auth::user()->name}}
                        </a>
                        <a class="text-light mt-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Cerrar Sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            
                    </div>
                </div> 
            </div>
        </nav>
        <!-- fin navbar -->

