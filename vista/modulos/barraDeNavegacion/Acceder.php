<?php
if (isset($_SESSION["usuario"])) {
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

    h5{
        text-align: center;
    }
    .btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
    color: white;
    background: #05162A;
    }
.btn:hover{
    background: #F0F0F0;
    border: 1px solid black;
    color: black;
    }
</style>

<div class="card" style="width: 18rem;">
	<img class="card-img-top" src="vista/presentacion/images/logo.png" alt="Card image cap" style="width: 50%;display: block;margin: auto;">
	    <div class="card-body">
			<h5 class="card-title">INICIAR SESIÓN</h5>
			<hr>
				<div class="informacion-abajo">
                    <form id="formLoguear" method="POST">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" for="loguearCodigo" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="loguearCodigo" class="form-control" placeholder="codigo" id="loguearCodigo" required>
                        </div>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" for="loguearContraseña" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                            </div>
                            <input type="password" name="loguearContraseña" class="form-control" placeholder="contraseña" id="loguearContraseña" required>
                        </div>

                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" for="loguearTipo"><i class="fas fa-users"></i></span>       
                                <select id="loguearTipo" name="loguearTipo" class="form-control" required> 
                                    <option value="">Seleccione tipo de usuario</option>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Administrador">Administrador</option>
                                </select>    
                            
                            </div>
                        </div>

                        <a class="btn" href="Inicio"> CANCELAR <i class="fas fa-times-circle"></i></a>
                        <button type="submit" class="btn" id="entrar"> ACCEDER <i class="fas fa-sign-in-alt"></i> </button>                                        
                    </form>
                </div> 
		</div>
</div>