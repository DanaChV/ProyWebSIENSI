<style type="text/css">
	.contenedora{
		width: 40%;
		display: block;
		margin: auto;
		border: 2px double;
		border-radius: 15px 15px 15px 15px;
		box-shadow: 10px 10px 10px #05162A;

	}

    h5{
        text-align: center;
    }

    form{
    	padding-left: 15px;
    }
</style>
<div class="contenedora">
	<img src="vista/presentacion/images/logo.png" alt="Card image cap" style="width: 30%;display: block;margin: auto;">
	    <div class="card-body">
			<h5 class="card-title">SUBIR ARCHIVOS</h5>
			<hr>
		</div>

	<form action="file" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo" id="archivo"></input>
		<input type="submit" value="Subir Archivo"></input>
	</form>
</div>