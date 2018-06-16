$(document).ready(function () {
    $("#formRecordar").validate({
        
        rules: {
            recordarCodigo: {required: true, number: true},
            recordarCorreo: {required: true},
            recuperarTipo:{required: true}
        },
        messages:
               {
                    recordarCodigo: {required: " ✘", number: " ✘"},
                    recordarCorreo: " ✘",
                    recuperarTipo: {
                    required: " ✘"
                    }
                },
                

        submitHandler: function () {

            var datos = {
                recordarCodigo: $("#recordarCodigo").val(),
                recordarCorreo: $("#recordarCorreo").val(),
                recuperarTipo: $("select[name=recuperarTipo]").val()
            };    
            
            $.ajax({
                url: 'vista/modulos/Ajax.php',
                method: 'post',
                data: datos,
                dataType:"text",
                
                beforeSend: function () {
                    respuestaInfoEspera("Espera un momento, te enviaremos un correo.");
                },
                success: function (respuesta)
                {
                    if (respuesta==="exito") {
                        exito("Exito","Te hemos enviado un correo con tu contraseña");
                    } else{
                        respuestaError("Error al recuperar Contraseña", "¿ Tienes una Cuenta ?");
                    }
                },
                error: function(jqXHR,estado,error){
                    console.log(estado);
                    console.log(error);
                    console.log(jqXHR);
                }
            });
        }
    });

});