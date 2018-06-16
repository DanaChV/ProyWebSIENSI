<?php
if(!isset($_SESSION["usuario"])){
   header("location:Inicio");
}
?>

<style type="text/css">
  #btnep{
    color: #05162A; 
  }
  #btneditar{
    color: white;
    background: #05162A;
  }
  #btneditar:hover{
    background: #F0F0F0;
    border: 1px solid black;
    color: black;
  }
  button img{
    width: 5%;
  }
</style>
<div class="container text-center mb-2">
    
    <br>
    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px; border-bottom: 3px solid #05162A; padding: 0;">
      <h1 class="pull-left" style="font-size:36px;text-align: center;">Editar Perfil</h1>
    </div>
    <br>

    <div class="accordion" id="accordionExample" style="border: 2px double">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button id="btnep" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Editar Foto <img src="vista/presentacion/images/logo.png">
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <p> cambiar foto </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button id="btnep" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Editar Información <img src="vista/presentacion/images/logo.png">
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <form class="card-body" id="formEditarDatos">
         <?php
                    $user = unserialize($_SESSION['usuario']);
                    echo '
                    <div class="input-group mb-3">
                      <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1">Codigo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCodigo().'" class="form-control" placeholder="Codigo" name="editarCodigo" id="editarCodigo" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                      </div>
                      <input type="text" required value="'.$user->getNombre().'" class="form-control" placeholder="Nombre" name="editarNombre" id="editarNombre" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Correo</span>
                      </div>
                      <input type="text" required value="'.$user->getCorreo().'" class="form-control" placeholder="Correo" name="editarCorreo" id="editarCorreo" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefono</span>
                      </div>
                      <input type="text" required value="'.$user->getTelefono().'" class="form-control" placeholder="Telefono" name="editarTelefono" id="editarTelefono" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Carrera</span>
                      </div>
                      <input type="text" required value="'.$user->getCarrera().'" class="form-control" placeholder="Carrera" name="editarCarrera" id="editarCarrera" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <a href="Perfil" class="btn" id="btneditar">Cancelar</a>
                    <button type="submit" class="btn" id="btneditar">Guardar Cambios</button>
                     ';
                    ?>              
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button id="btnep" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Editar Contraseña <img src="vista/presentacion/images/logo.png">
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <form class="card-body" id="formEditarContraseña" method="post">
         <?php
                    $user = unserialize($_SESSION['usuario']);
                    echo '
                    <div class="input-group mb-3">
                      <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1">Contraseña Antigua</span>
                      </div>
                      <input type="text" required value="" class="form-control" placeholder="Contraseña Actual" name="editarContraseñaA" id="editarContraseñaA" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1">Contraseña Nueva</span>
                      </div>
                      <input type="text" required value="" class="form-control" placeholder="Contraseña Nueva" name="editarContraseñaN" id="editarContraseñaN" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <a href="Perfil" class="btn" id="btneditar">Cancelar</a>
                    <button type="submit" class="btn" id="btneditar">Guardar Cambios</button>
                     ';
                    ?>              
      </form>
    </div>
  </div>
</div>
    
</div>
