<?php
if(!isset($_SESSION["usuario"])){
   header("location:Inicio");
}
?>

<style type="text/css">
  article {
    background: #DBDDE3;
    border: 2px double;
    border-radius: 15px 15px 15px 15px;
    box-shadow: 10px 10px 10px #05162A;
    display: block;
    margin: 2% 40% 5% 40%;
  }
  article h2{
    color: #05162A;
  }
  section img{
    width: 25%;
    display: block;
    margin: auto;
    padding: 15px;
  }
</style>

<div class="row mt-5">
    <div class="col-md-7 container" id="vistaEstudiante">
        <article id="vistaPerfil" class="container perfil">
          <section>
            <img src="vista/presentacion/images/logo.png" href="inicio">
          </section>
            <h2>Mi Perfil</h2>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <img class="mb-2" id="miFoto" src="https://www.vccircle.com/wp-content/uploads/2017/03/default-profile.png" style="border: 2px double; border-radius: 20px 20px 20px 20px; width:100%; height:43%; display:block; margin:auto;">
                </div>

                <div class="col-md-7">
                    <?php
                    if(isset($_SESSION["usuario"])){
                      include_once 'modelo/dto/EstudianteDTO.php';
                      $user = unserialize($_SESSION["usuario"]);
                    if($user instanceof EstudianteDTO){
                      echo '
                    <div class="input-group mb-3">
                      <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1">Codigo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCodigo().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                      </div>
                      <input type="text" disabled value="'.$user->getNombre().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Correo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCorreo().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefono</span>
                      </div>
                      <input type="text" disabled value="'.$user->getTelefono().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Carrera</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCarrera().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     ';
                    }else{
                      include 'modelo\dto\AdministradorDTO.php';
                        $user = unserialize($_SESSION['usuario']);
                        echo'
                    <div class="input-group mb-3">
                      <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1">Codigo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCodigo().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                      </div>
                      <input type="text" disabled value="'.$user->getNombre().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Correo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCorreo().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefono</span>
                      </div>
                      <input type="text" disabled value="'.$user->getTelefono().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Cargo</span>
                      </div>
                      <input type="text" disabled value="'.$user->getCargo().'" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     ';
                      }}
                    ?>               
                </div>
            </div>
        </article>
    </div>
</div>