@extends('templates.panel_personal')

@section('title', 'Creación - Plana Docente')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
    }

    .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
    }
    
    #overlay p,
    .icon-upload {
        opacity: 0;
    }
    
    #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
    }

    #overlay.draggedover p,
    #overlay.draggedover i {
        opacity: 1;
    }
    
    .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
    }

    input[type="number"]{
        -moz-appearance: textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    {{-- breacrumb --}}
    <div class="row pt-3">
        <div class="col-12">
            <div class="pt-2 pt-md-0" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{url('informacion_general')}}">Plana Docente</a></li>
                    <li class="breadcrumb-item" aria-current="page">Registrar nueva Plana Docente</li>
                </ol>
            </div>
        </div>
    </div>
    {{-- fin breacrumb --}}
    <!-- Encabezado -->
    <div class="row">
        <div class="col-lg-9">
            <h1 class="text-secondary h2 text-uppercase fw-bold mb-0">Plana Docente</h1>
            <p class="text-muted">Opciones para crear una Imagen, Cargo y Nombre</p>
        </div>
        <div class="col-lg-3 d-flex">
            
        </div>
    </div>
    <!-- fin encabezado -->
    {{-- Inicio contenido --}}
    {!! Form::open([ 'route'=>'plana_docente.store','method'=>'POST','files'=>true]) !!}
          <center>
          <table width="100%" border="1">
            <tr>
              <td colspan="2">
                <div class="control-group">
                {!! Form::label('imagen','Imagen',['class'=>'control-label']) !!}
                  <div class="controls">
                {!! Form::file('imagen') !!}
                  </div>
                </div>
              </td>
            </tr>
            <tr>
            <td colspan="2">
          <div class="form-group">
            {!! Form::label('cargo','Ingrese el Cargo:') !!}

            {!! Form::text('cargo',null,['class'=>'span4'])!!}
            </div>
          </td>
          
          </tr>
          <tr>
          <td colspan="2">
          <div class="text-center">
              {!! Form::label('nombre','Ingresa el nombre y apellido completo del docente:') !!}
              {!! Form::textarea('nombre',null,['class'=>'form-control','rows'=> 4 ]) !!}
              <!-- <textarea class="input-xxlarge" id="texto" name="texto" rows="15"></textarea> -->
              </div>
          </td>
          </tr>
  <tr>
  <td colspan="2">
    <div class="text-center">
      {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
  </td>
  </tr>
  </table>
  </center>
{!! Form::close() !!}
    {{-- fin contenido --}}

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        function previewImage(nb) {        
        var reader = new FileReader();         
        reader.readAsDataURL(document.getElementById('uploadImage'+nb).files[0]);         
        reader.onload = function (e) {             
            document.getElementById('uploadPreview'+nb).src = e.target.result;         
        };     
        }
    </script>
    <script>
        const fileTempl = document.getElementById("file-template"),
          imageTempl = document.getElementById("image-template"),
          empty = document.getElementById("empty");
        
        // use to store pre selected files
        let FILES = {};
        
        // check if file is of type image and prepend the initialied
        // template to the target element
        function addFile(target, file) {
          const isImage = file.type.match("image.*"),
            objectURL = URL.createObjectURL(file);
        
          const clone = isImage
            ? imageTempl.content.cloneNode(true)
            : fileTempl.content.cloneNode(true);
        
          clone.querySelector("p").textContent = file.name;
          clone.querySelector("li").id = objectURL;
          clone.querySelector(".delete").dataset.target = objectURL;
          clone.querySelector(".size").textContent =
            file.size > 1024
              ? file.size > 1048576
                ? Math.round(file.size / 1048576) + "mb"
                : Math.round(file.size / 1024) + "kb"
              : file.size + "b";
        
          isImage &&
            Object.assign(clone.querySelector("img"), {
              src: objectURL,
              alt: file.name
            });
        
          empty.classList.add("hidden");
          target.prepend(clone);
        
          FILES[objectURL] = file;
        }
        
        const gallery = document.getElementById("gallery"),
          overlay = document.getElementById("overlay");
        
        // click the hidden input of type file if the visible button is clicked
        // and capture the selected files
        const hidden = document.getElementById("hidden-input");
        document.getElementById("button").onclick = () => hidden.click();
        hidden.onchange = (e) => {
          for (const file of e.target.files) {
            addFile(gallery, file);
          }
        };
        
        // use to check if a file is being dragged
        const hasFiles = ({ dataTransfer: { types = [] } }) =>
          types.indexOf("Files") > -1;
        
        // use to drag dragenter and dragleave events.
        // this is to know if the outermost parent is dragged over
        // without issues due to drag events on its children
        let counter = 0;
        
        // reset counter and append file to gallery when file is dropped
        function dropHandler(ev) {
          ev.preventDefault();
          for (const file of ev.dataTransfer.files) {
            addFile(gallery, file);
            overlay.classList.remove("draggedover");
            counter = 0;
          }
        }
        
        // only react to actual files being dragged
        function dragEnterHandler(e) {
          e.preventDefault();
          if (!hasFiles(e)) {
            return;
          }
          ++counter && overlay.classList.add("draggedover");
        }
        
        function dragLeaveHandler(e) {
          1 > --counter && overlay.classList.remove("draggedover");
        }
        
        function dragOverHandler(e) {
          if (hasFiles(e)) {
            e.preventDefault();
          }
        }
        
        // event delegation to caputre delete events
        // fron the waste buckets in the file preview cards
        gallery.onclick = ({ target }) => {
          if (target.classList.contains("delete")) {
            const ou = target.dataset.target;
            document.getElementById(ou).remove(ou);
            gallery.children.length === 1 && empty.classList.remove("hidden");
            delete FILES[ou];
          }
        };
        
        // print all selected files
        document.getElementById("submit").onclick = () => {
          alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
          console.log(FILES);
        };
        
        // clear entire selection
        document.getElementById("cancel").onclick = () => {
          while (gallery.children.length > 0) {
            gallery.lastChild.remove();
          }
          FILES = {};
          empty.classList.remove("hidden");
          gallery.append(empty);
        };
    </script>

@endsection