@extends('templates.panel_personal')

@section('title', 'Configuración Pagina Web Sobre Nosotros')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<style>
.slider{
    width: 100%;
    height:180px;
}

.portada{
    min-height: 300px;
}

.img__nosotros{
    width: 100%;
    height: 200px;
}

@media only screen and (min-width:320px) and (max-width:768px){
    .portada{
    min-height: 180px;
}
}
</style>
@endsection

@section('content')
    <!-- Encabezado -->
        <div class="row pt-5">
            <div class="col-lg-9">
                <h1 class="text-azul h2 text-uppercase fw-bold mb-0"> Quienes Somos</h1>
                <p class="text-muted">Se muestra informacion sobre quienes somos</p>
            </div>
            <div class="col-lg-3 d-flex">
                <a href="/sobre_nosotros/{{$Pnosotros->id}}" class="btn btn-primary w-100 align-self-center text-white mb-2 mb-md-0">
                    <i class="bi bi-plus-circle-fill me-2"></i>
                    Actualizar datos
                </a>
            </div>
        </div>
    <!-- fin encabezado -->
    {{-- contenido --}}
        <div class="card border-4 borde-top-primary shadow-sm h-100">
            <div class="card-body">
                <table id="" class="display table table-hover table-sm" cellspacing="0" style="width:100%">
                    <thead class="">
                        <tr>
                            <th class="h6">Fila</th>
                            <th class="h6">Titulo</th>
                            <th class="h6">Texto</th>
                            <th class="h6">Imagen</th>
                            
                        </tr>
                    </thead>
                     <tbody>
                      
                            <tr>
                                <td class="fw-light align-middle">1</td>
                                <td class="fw-light align-middle">{{$Pnosotros->titulo}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->texto}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->imagen}}</td>
                            </tr>
                            <tr>
                                <td class="fw-light align-middle">2</td>
                                <td class="fw-light align-middle">{{$Pnosotros->titulo2}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->texto2}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->imagen2}}</td>
                            </tr>
                            <tr>
                                <td class="fw-light align-middle">3</td>
                                <td class="fw-light align-middle">{{$Pnosotros->titulo3}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->texto3}}</td>
                                <td class="fw-light align-middle">{{$Pnosotros->imagen3}}</td>
                            </tr>
                            <tr>  
                                <td class="align-middle" colspan="4">                                        
                                    <div class="text-center">
                                        
                                            <a href="{{url("sobre_nosotros_")}}" target="_blank" class="btn btn-secondary text-white btn-sm"><i class="bi bi-eye-fill"></i></a>
                                            <a href="{{url("sobre_nosotros/1/edit")}}" class="btn btn-secondary text-white btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                
                                    </div>      
                                </td>
                            </tr>
                           
                    </tbody>
                </table>
            </div>
        </div>
    {{-- fin contenido --}}

    
   
@endsection

@section('js')

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        var swiper = new Swiper(".portada-slider", {
        //   slidesPerView: 1,
        loop:true,
        spaceBetween: 45,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
            slidesPerView: 1,
            //   spaceBetween: 20,
            },
            768: {
            slidesPerView: 3,
            //   spaceBetween: 40,
            },
            1024: {
            slidesPerView: 4,
            //  spaceBetween: 50,
            },
        },
        });
    </script>

    {{-- ver contraseña --}}
        <script>
                    $("#imgContrasena").click(function () {

            var control = $(this);
            var estatus = control.data('activo');
            
            var icon = control.find('span');
            if (estatus == false) {
            
                control.data('activo', true);
                $(icon).removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
                $("#password").attr('type', 'text');
            }
            else {
            
                control.data('activo', false);
                $(icon).removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
                $("#password").attr('type', 'password');
            }
            });
        </script>

        <script>
                $("#imgContrasenas").click(function () {

                var control = $(this);
                var estatus = control.data('activo');
                
                var icon = control.find('span');
                if (estatus == false) {
                
                    control.data('activo', true);
                    $(icon).removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
                    $("#confirmpassword").attr('type', 'text');
                }
                else {
                
                    control.data('activo', false);
                    $(icon).removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
                    $("#confirmpassword").attr('type', 'password');
                }
                });
        </script>

        <script>
            $('#password, #confirmpassword').on('keyup', function () {
            if ($('#password').val() == $('#confirmpassword').val()) {
                $('#message').html('CORRECTO').css('color', 'green');
            } else 
                $('#message').html('LAS CONTRASEÑAS NO COINCIDEN').css('color', 'red');
            });
        </script>
    {{-- fin de contraseña --}}
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        $(function() {
            $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
            });
        })
    </script>
    <!--sweet alert agregar-->
    @if(session('addequipo') == 'ok')
        <script>
            Swal.fire({
            icon: 'success',
            confirmButtonColor: '#89A3BC',
            title: '¡Éxito!',
            text: 'Equipo registrado correctamente',
            })
        </script>
    @endif

    <!--sweet alert actualizar-->
    @if(session('update') == 'ok')
        <script>
            Swal.fire({
            icon: 'success',
            confirmButtonColor: '#89A3BC',
            title: '¡Actualizado!',
            text: 'Registro actualizado correctamente',
            })
        </script>
    @endif
        
    <!--sweet alert eliminar-->
    @if(session('delete') == 'ok')
        <script>
        Swal.fire({
            icon: 'success',
            confirmButtonColor: '#89A3BC',
            title: '¡Eliminado!',
            text: 'Registro eliminado correctamente',
            })
        </script>
    @endif
    <script>
        $('.form-delete').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estas seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#89A3BC',
            cancelButtonColor: '#373D43',
            confirmButtonText: '¡Sí, eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                
            this.submit();
            }
            })

        });
    </script>
    <!--.sweet alert eliminar-->
@endsection