$(document).ready(function(){


	$("#formregistrar").validate({

		rules: {
			
			codigo: {required: true},
			name: {required: true},
			email: {required: true},
			telefono: {required: true},
			carrera: {required: true},
			password: {required: true}
		
		},

		messages: {

			codigo: {required: "X"},
			name: {required: "X"},
			email: {required: "X"},
			telefono: {required: "X"},
			carrera: {required: "X"},
			password: {required: "X"}

		},

		submitHandler: function() {

			var datos = {

				codigo: $("#codigo").val(),
				name: $("#name").val(),
				email: $("#email").val(),
				telefono: $("#telefono").val(),
				carrera: $("#carrera").val(),
				password: $("#password").val()

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

						ingresoExitoso("Exito", "Registro Exitoso");

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

});