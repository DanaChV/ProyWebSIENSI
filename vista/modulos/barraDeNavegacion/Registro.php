<?php
if (isset($_SESSION["Estudiante"])) {
    header("location:Perfil");
}
?>

<style type="text/css">
	.card{
		display: block;
		margin: 2% 50% 2% 40%;
		border: 2px double;
		border-radius: 15px 15px 15px 15px;
		box-shadow: 10px 10px 10px #05162A;

	}

	h5 {
		text-align: center;
	}
	.a{
		color: white;
		background: #05162A;
		width: 60%;
		margin-left: 20%;
	}
	.a:hover{
		background: #F0F0F0;
		border: 1px solid black;
		color: black;
	}
		.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	color: blue;
	font-size: 11px;
	text-align: center;
}
</style>

<div class="card" style="width: 18rem;">
	<img class="card-img-top" src="vista/presentacion/images/logo.png" alt="Card image cap" style="width: 50%;display: block;margin: auto;">
	    <div class="card-body">
			<h5 class="card-title">INSCRIPCIÓN</h5>
			<hr>
			    <p class="card-text">Registrate para ser integrante del semillero SIENSI y hacer parte de este gran grupo.</p>
			    <a href="#" id="btnInscribir" class="btn a" data-toggle="modal" data-target=".bd-example-modal-sm">Inscribirme</a>
		</div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 50%;">
    <div class="modal-content" style="padding: 10%;">
      <div class="form-group">
      	<form class="form-horizontal" method="post" id="formregistrar">
      		<h3 style="text-align: center;">¡INSCRIPCIÓN!</h3>
      		<img src="vista/presentacion/images/logo.png" style="display: block;margin: auto;width: 30%;">
      		<hr style="width: 100%;">

						<div class="form-group">
							<label for="codigo" class="cols-sm-2 control-label">Codigo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="codigo" id="codigo"  placeholder="Ingrese su Codigo" required />
								</div>
							</div>
						</div>

						<div class="form-group">
						<label for="name" class="cols-sm-2 control-label">Nombre</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Ingrese su Nombre" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Correo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Ingrese su Correo" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="cols-sm-2 control-label">Telefono</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="telefono" id="telefono"  placeholder="Inrese su telefono" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="carrera" class="cols-sm-2 control-label">Carrera</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="carrera" id="carrera"  placeholder="Ingrese su carrera" required />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Ingrese su Contraseña" required/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" id="aqui" class="btn btn-primary btn-lg btn-block login-button">Inscribirse</button>
						</div>
					</form>
    			</div>
			</div>
		</div>
	</div>