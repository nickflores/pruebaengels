$('input[id=formFileSm]').on('change', function(){
    var ext = $( this ).val().split('.').pop();
    if ($( this ).val() != '') {
      if(ext == "mp4"){
        $('#message').html("Correcto, La extensión es: ." + ext);
        if($(this)[0].files[0].size > 10485760){
          console.log("El documento excede el tamaño máximo");
          $('#modal-title').text('¡Precaución!');
          $('#message').html("Se solicita un archivo no mayor a 9MB. Por favor verifica.");
          $("#modal-gral").modal();           
          $(this).val('');
        }else{
          $("#aviso").hide();
        }
      }
      else
      {
        $( this ).val('');
        $('#message').html("Extensión no permitida: ." + ext);
      }
    }
  });
  /*"Archivo incompatible, procure que sea de extension .mp4" */
  