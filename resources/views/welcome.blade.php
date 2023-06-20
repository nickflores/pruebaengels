<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnobots</title>
    <link rel="stylesheet" href="/css/style2.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
  <div class="menu" id="menu">
      <div class="menu-container">
        <ul class="list">
          <li><a href="" class="link">Carreras</a></li>
          <li><a href="" class="link">Cursos</a></li>
          <li><a href="" class="link">Diplomados</a></li>
          <li><a href="" class="link">Nosotros</a></li>
          <li><a href="" class="link">Login</a></li>
        </ul>
        <button id="closeMenu">Cerrar</button>
      </div>
    </div>
    <nav class="nav">
      <a href="" class="enlace-logo">
        <img src="iconos/logo.jpg" alt="" class="logo" />
      </a>
      <input type="checkbox" class="check" />
      <label id="checkBtn" for="" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
      </label>
      <div class="menus">
        <ul class="lista">
          <li><a href="{{url('nosotros_')}}" class="link">Nosotros</a></li>
          <li><a href="{{url('productos_')}}" class="link">Productos</a></li>
          <li><a href="{{url('cursos_')}}" class="link">Cursos</a></li>
          <li><a href="{{url('proyectos_')}}" class="link">Proyectos</a></li>
          <li>
            <a href="{{url('contactenos_')}}" class="link">Contáctenos</a>
          </li>
          <li class="nav-item">
            <form method="GET" action="{{ url('intranet_') }}">
              <button>Iniciar Sesión</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
    <section class="principal">
      <div class="container">
        <div class="div-img-principal">
          <img src="iconos/pexel_andrea.png" alt="" class="principal-img" />
        </div>
        <div class="texto">
          <h2 class="principal-titulo">Una Revolucionaria forma de Educar</h2>
          <p class="principal-texto">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
            aliquam inventore similique modi ipsa culpa eum facere repellendus
            molestiae, voluptates exercitationem provident deleniti, illum
            maxime beatae. Deleniti ullam optio veritatis!
          </p>
          <button class="btn-icon">
            <i class="fa-solid fa-circle-play"></i>
          </button>
          <label href="#" class="principal-icono">Conocenos</label>
        </div>
      </div>
    </section>
    <div class="cards">
      <div class="card">
        <i class="fa-sharp fa-solid fa-people-group icono-card"></i>
        <h4>60,000+</h4>
        <p>Horas</p>
      </div>
      <div class="card">
        <i class="fa-sharp fa-solid fa-people-group icono-card"></i>
        <h4>1,00,000+</h4>
        <p>Estudiantes</p>
      </div>
      <div class="card">
        <i class="fa-sharp fa-solid fa-people-group icono-card"></i>
        <h4>10+</h4>
        <p>Sedes</p>
      </div>
    </div>
    <section class="carreras">
      <div class="carreras-titulo">
        <h2>Carreras</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
          distinctio culpa architecto cupiditate accusantium fugit ducimus
          doloribus, iure quos fugiat ullam suscipit a reiciendis quaerat
          exercitationem, odit dolores itaque ad?
        </p>
      </div>
      <div class="carreras-container">
        <div class="carreras-nombre">
          <div class="imagenes-ca">
            <img src="iconos/Rectangle 6.png" alt="" class="carrera-img" />
          </div>
          <div class="carreras-info">
            <h3>Marketing Digital</h3>
            <p>Duración: 6 semestres(3 años)</p>
            <p>Modalidad: Semipresencial</p>
            <p>Titulación: Titulo a nombre de la nación</p>
          </div>
        </div>
        <div class="carreras-nombre">
          <div class="imagenes-ca">
            <img src="iconos/Rectangle 9.png" alt="" class="carrera-img" />
          </div>
          <div class="carreras-info">
            <h3>Desarrollo de software</h3>
            <p>Duración: 6 semestres(3 años)</p>
            <p>Modalidad: Semipresencial</p>
            <p>Titulación: Titulo a nombre de la nación</p>
          </div>
        </div>
        <div class="carreras-nombre">
          <div class="imagenes-ca">
            <img src="iconos/Rectangle 12.png" alt="" class="carrera-img" />
          </div>
          <div class="carreras-info">
            <h3>Diseño Gráfico</h3>
            <p>Duración: 6 semestres(3 años)</p>
            <p>Modalidad: Semipresencial</p>
            <p>Titulación: Titulo a nombre de la nación</p>
          </div>
        </div>
      </div>
    </section>
    <section class="beneficios">
      <div class="beneficios-container">
        <div class="beneficios-imagenes">
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img1" />
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img2" />
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img3" />
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img4" />
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img5" />
          <img src="iconos/Ellipse 50.png" alt="" class="beneficios-img6" />
        </div>
        <div class="beneficios-parrafos">
          <h2>Beneficios de estudiar con tecnobots</h2>
          <div class="beneficios-parrafos-container">
            <div class="beneficios-iconos">
              <img src="iconos/titulo.png" alt="" />
            </div>
            <div class="beneficios-texto">
              <h3>Titulo a nombre de la nación</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                aliquam, purus sit amet luctus venenatis, lectus magna fringilla
                urna, porttitor rhoncus dolor purus non enim
              </p>
            </div>
          </div>
          <div class="beneficios-parrafos-container">
            <div class="beneficios-iconos">
              <img src="iconos/cursos.png" alt="" />
            </div>
            <div class="beneficios-texto">
              <h3>Titulo a nombre de la nación</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                aliquam, purus sit amet luctus venenatis, lectus magna fringilla
                urna, porttitor rhoncus dolor purus non enim
              </p>
            </div>
          </div>
          <div class="beneficios-parrafos-container">
            <div class="beneficios-iconos">
              <img src="iconos/perfil.png" alt="" />
            </div>
            <div class="beneficios-texto">
              <h3>Titulo a nombre de la nación</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                aliquam, purus sit amet luctus venenatis, lectus magna fringilla
                urna, porttitor rhoncus dolor purus non enim
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="expeciencias">
      <div class="experiencias-container">
        <div class="experiencias-alumnos">
          <h2>
            Nuestros alumnos y egresados te cuentan su experiencia estudiando en
            LOGO
          </h2>
          <p>
            vel fringilla est ullamcorper eget nulla facilisi etiam dignissim
            diam quis enim lobortis scelerisque fermentum dui faucibus in ornare
            quam viverra orci
          </p>
        </div>
        <div class="experiencia-publicada">
          <img src="iconos/Ellipse 50.png" alt="" class="img-experiencia1" />
          <img src="iconos/Ellipse 50.png" alt="" class="img-experiencia2" />
          <img src="iconos/Ellipse 50.png" alt="" class="img-experiencia3" />
          <img src="iconos/Ellipse 50.png" alt="" class="img-experiencia4" />
          <img src="iconos/Ellipse 50.png" alt="" class="img-experiencia5" />
          <div class="experiencia-alumno">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit amet luctus venenatis, lectus magna fringilla
              urna, porttitor
            </p>
            <p class="alumno">-Jeo Lee</p>
            <img src="iconos/Ellipse 50.png" alt="" class="alumno-img" />
          </div>
        </div>
      </div>
    </section>
    <section class="login">
      <div class="login-container">
        <form action="" class="formulario">
          <h2>
            ¡Conversemos! Hablemos por whatsapp o regístrate y te llamamos.
          </h2>
          <div class="inputs">
            <input type="text" placeholder="Apellidos y Nombres" class="a1" />
            <input type="text" placeholder="Número" class="a1" />
            <input type="text" placeholder="Correo" class="a1" />
          </div>
          <button>Enviar</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <div class="footer-seccion">
          <img src="iconos/logo.jpg" alt="" class="logo-footer" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
            quisquam vitae reiciendis cupiditate sint ut nihil iure numquam,
            impedit voluptas aliquam et similique accusantium corporis.
            Voluptate sequi velit culpa? Molestiae!
          </p>
          <img src="iconos/fb.png" alt="" class="footer-iconos" />
          <img src="iconos/in.png" alt="" class="footer-iconos" />
          <img src="iconos/in.png" alt="" class="footer-iconos" />
        </div>
        <div class="footer-listas">
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Company</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Community</a></li>
            <li><a href="">Testimonial</a></li>
          </ul>
          <ul>
            <li><a href="">Contact Us</a></li>
            <li><a href="">(91) 98765 4321 54 </a></li>
            <li><a href="">support@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <div class="linea"></div>
        <p>Copyright 2020 All rights Reserved . Null</p>
        <button>
          <img src="iconos/WhatsApp_icon 1.png" alt="" class="wsp" />
        </button>
      </div>
    </footer>
    <script src="/js/index.js"></script>
  </body>
</html>