<header>
		<div class="row">
			<div class="izq">
				<img src="vista/presentacion/images/logo.png">
			</div>
			<div class="centro">
				<h1>SIENSI</h1>
				<hr style="width: 100%;">
				<h3>SEMILLERO DE INVESTIGACIÓN EN SEGURIDAD DE LA INFORMACIÓN</h3>
			</div>
			<div class="der">
				<img src="vista/presentacion/images/logoufps.png">
			</div>
		</div>
	</header>
	<br>

	<nav class="navbar navbar-expand-lg">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="ion-navicon-round"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">

	  	<?php
        if (!isset($_SESSION["usuario"])) {
            echo 
            '<div class="navbar-nav mr-auto text-center ">

              <ul class="navbar-nav">
	             <li class="nav-item">
	               <a class="nav-link" href="inicio">Inicio</a>
	             </li>
	             <li class="nav-item">
	               <a class="nav-link" href="Informacion">Información</a>
	             </li>
	             <li class="nav-item">
    			       <a class="nav-link" href="Documentos">Documentos</a>
  			     </li>
  			     <li class="nav-item">
    		       <a class="nav-link" href="Galeria">Galeria</a>
  			     </li>
  			     <li c
	           </ul>
          	</div>

        <div class="d-flex flex-row justify-content-center">
       		<ul class="navbar-nav">
       			<li class="nav-item">
	               <a class="nav-link" href="Registro">Registrarme</a>
	             </li>
	             <li class="nav-item">
	               <a class="nav-link" href="Acceder">Iniciar Sesión</a>
	             </li>
       		</ul>
        </div>';
        } else if(isset($_SESSION["usuario"])){
        	 include_once 'modelo/dto/EstudianteDTO.php';
        $user = unserialize($_SESSION["usuario"]);
        	if($user instanceof EstudianteDTO){
                echo 
            '<div class="navbar-nav mr-auto text-center ">
            
              <ul class="navbar-nav">
	             <li class="nav-item">
	               <a class="nav-link" href="inicio">Inicio</a>
	             </li>
	             <li class="nav-item">
	               <a class="nav-link" href="Informacion">Información</a>
	             </li>
	             <li class="nav-item">
    			       <a class="nav-link" href="Documentos">Documentos</a>
  			       </li>
  			       <li class="nav-item">
    			       <a class="nav-link" href="Proyectos">Proyectos</a>
  			       </li>
  			       <li class="nav-item">
    			       <a class="nav-link" href="Galeria">Galeria</a>
  			       </li>
	           </ul>
            </div>
        
        <div class="d-flex flex-row justify-content-center">
       		<ul class="navbar-nav">
  			       <li class="nav-item">
    			       <a class="nav-link" href="editarPerfil">Editar Perfil</a>
  			       </li>
       			<li class="nav-item">
	               <a class="nav-link" href="Perfil">Mi Perfil</a>
	             </li>
	             <li class="nav-item">
	               <a class="nav-link" href="Salir">Cerrar Sesión</a>
	             </li>
       		</ul>
        </div>';
        	}else{
        		include 'modelo\dto\AdministradorDTO.php';
		            $user = unserialize($_SESSION['usuario']);
		            echo 
		            '<div class="navbar-nav mr-auto text-center ">
            
              			<ul class="navbar-nav">
	             			<li class="nav-item">
	               				<a class="nav-link" href="inicio">Inicio</a>
	             			</li>
	             			<li class="nav-item">
	               				<a class="nav-link" href="Informacion">Información</a>
	             			</li>
	             			<li class="nav-item">
    			       			<a class="nav-link" href="Documentos">Documentos</a>
  			       			</li>
  			       			<li class="nav-item">
    			       			<a class="nav-link" href="Proyectos">Proyectos</a>
  			       			</li>
  			       			<li class="nav-item">
    			       			<a class="nav-link" href="Galeria">Galeria</a>
  			       			</li>
	           			</ul>
            		</div>
		            <div class="d-flex flex-row justify-content-center">
       					<ul class="navbar-nav">
       						<li class="nav-item">
	               				<a class="nav-link" href="Perfil">Mi Perfil</a>
	             			</li>
	             			<li class="nav-item">
	               				<a class="nav-link" href="Salir">Cerrar Sesión</a>
	             			</li>
       					</ul>
        			</div>';
        }}
        ?>

	  </div>
	</nav>
	<br>
	<div class="container" id="contenedora">
		<!--CONTENIDO DE LA PAGINA-->
	</div>