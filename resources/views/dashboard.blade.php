@extends('templates.panel_personal')
@section('title', 'Información')
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
                <h1 class="text-azul h2 text-uppercase fw-bold mb-0">PANEL DE ADMINISTRACION DE LA PAGINA WEB "Tecnobots"</h1>
                <p class="text-muted">CENTRO DE CAPACITACION TECNOBOTS PERU</p>
            </div>
            
        </div>
    <!-- fin encabezado -->

    
    {{-- contenido --}}
      @yield('content')
            
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
<!-- Fin de la pagina con rol 4 -->

