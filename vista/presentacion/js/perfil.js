$(document).ready(function () {
    $("#formEditarDatos").validate({
        rules: {
            editarNombre: {required: true},
            editarCorreo: {required:true},
            editarTelefono: {required:true},
            editarCarrera: {required:true}
        },
        messages: {
            editarNombre: {required: "X"},
            editarCorreo: {required: "X"},
            editarTelefono: {required: "X"},
            editarCarrera: {required: "X"}
        },
        submitHandler: function () {
            
            var datos ={editarNombre:$("#editarNombre").val(),
                editarCorreo:$("#editarCorreo").val(),
                editarTelefono:$("#editarTelefono").val(),
                editarCarrera:$("#editarCarrera").val()   
            };
        
            
			$.ajax({
				url: 'vista/modulos/Ajax.php',
				method: 'post',
				data: datos,
				dataType: 'json',

				beforeSend: function() {
					respuestaEspera("Espere un momento por favor");
				},

				success: function(respuesta){

					if(respuesta["exito"]) {

						ingresoExitoso("Exito", "Los datos han sido actualizados");

					}else if(!respuesta["exito"]){

						respuestaError("Error", "Ocurrio un Error");

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
    
    
     $("#formEditarContraseña").validate({
        rules: {
            editarContraseñaN: {required: true},
            editarContraseñaA: {required:true}
        },
        messages: {
            editarContraseñaN: {required: "X"},
            editarContraseñaA: {required: "X"}
        },
        submitHandler: function () {
            
            var datos ={editarContraseñaN:$("#editarContraseñaN").val(),
                editarContraseñaA:$("#editarContraseñaA").val()
            };
        
            
			$.ajax({
				url: 'vista/modulos/Ajax.php',
				method: 'post',
				data: datos,
				dataType: 'json',

				beforeSend: function() {
					respuestaEspera("Espere un momento por favor");
				},

				success: function(respuesta){

					if(respuesta["exito"]) {

						ingresoExitoso("Exito", "Inicie Sesión");

					}else if(!respuesta["exito"]){

						respuestaError("Error", "Contraseña Actual Incorrecta");

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