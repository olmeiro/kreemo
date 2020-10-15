$(document).ready(function(){
    $("#crearObra").click(function(event){

        event.preventDefault();

        let validado = 0;

        if( $("#idempresa").val() == 0 )
        {
            $("#valIdEmpresa").text("* Debe elegir una empresa.");
        }
        else
        {
            $("#valIdEmpresa").text("");
            validado++;
        }

        if( $("#nombre").val().length == 0 || $("#nombre").val().length > 30)
        {
            $("#valNombre").text("* Debe ingresar nombre de la obra.");
        }
        else
        {
            $("#valNombre").text("");
            validado++;
        }

        //-----------------------------

        if($("#direccion").val().length == 0 || $("#direccion").val().length > 30)
        {
            $("#valDireccion").text("* Debe ingresar dirección de la obra.")
        }
        else{
            $("#valDireccion").text("");
            validado++;
        }

        //-----------------------------

        
        if($("#telefono1").val().length == 0 || isNaN($("#telefono1").val()))
         {
             $("#valTelefono1").text("* Ingrese un número de telefono de la obra.");
         }
         else if(!(/^\d{7,10}$/.test($("#telefono1").val())))
         {
          $("#valTelefono1").text("* Ingrese un número de celular de 10 dígitos.");
         }
         else{
             $("#valTelefono1").text("");
             validado++;
         }

        //-----------------------------

         const emailRegex = new RegExp(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i);
 
         if($("#correo1").val().length == 0 || !emailRegex.test($("#correo1").val()))
         {
             $("#valCorreo1").text("* Ingrese un correo electrónico.");
         }
         else
         {
             $("#valCorreo1").text("");
             validado++;
         }  

        console.log('validado: '+ validado);

        if (validado == 5)
        {
            var fd = new FormData(document.getElementById("frmEditarObra"));

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/obra/actualizar",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                data: fd,
                processData: false,  // tell jQuery not to process the data
                contentType: false ,  // tell jQuery not to set contentType
                }).done(function(respuesta){
                  if(respuesta.ok)
                  {
                    Swal.fire('Se registro el nuevo tipo contacto.');
                     $("#exampleModal2").modal('hide');//ocultamos el modal
                     $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                     $('.modal-backdrop').remove();//eliminamos el backdrop del modal
                     $("#mensaje").text("Nueno contacto Creado")
                    var table = $('#tbl_contacto').DataTable();
                    table.ajax.reload();
                    
                    limpiar();
                  }
                  else{
                    Swal.fire('No se puedo crear el nuevo tipo contacto.');
                  }
                })
         }
         else
         {
             Swal.fire('Faltan campos por diligenciar.');
             validado = 0;
         }

    })
})



$(document).ready(function(){

    $(".solo_numeros").on("keyup",function(){
        this.value = this.value.replace(/[^0-9]/g,'');
    });

    $(".solo_letras").on("keyup",function(){
        this.value = this.value.replace(/[0-9]/g,'');
    });
});


function soloLetras(e) {
    var key = e.keyCode || e.which,
    tecla = String.fromCharCode(key).toLowerCase(),
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
    especiales = [8, 37, 39, 46],
    tecla_especial = false;

    for (var i in especiales) {
    if (key == especiales[i]) {
        tecla_especial = true;
        break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
    }
}

function soloNumeros(e) {
    var key = e.keyCode || e.which,
    tecla = String.fromCharCode(key).toLowerCase(),
    letras = " 0123456789",
    especiales = [8, 37, 39, 46],
    tecla_especial = false;

    for (var i in especiales) {
    if (key == especiales[i]) {
        tecla_especial = true;
        break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
    }
}

function limpiar()
{
    
}

