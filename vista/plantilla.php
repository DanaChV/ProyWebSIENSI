<html lang="es">
    <head>
        <title> SIENSI UFPS </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link href="vista/presentacion/images/logo.png" rel="Shortcut icon">
        <link type="text/css" rel="stylesheet" href="vista/presentacion/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="vista/presentacion/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="vista/presentacion/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="vista/presentacion/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="vista/presentacion/css/estilo.css">
        <script defer src="vista/presentacion/js/fontawesome-all.js"></script>
    </head>
    <body>       
        <?php
        session_start();
        include_once 'modulos/Header.php';
        $controlador = new Controlador();
        $controlador->generarVista();
        include_once 'modulos/Footer.php';
        ?>

        <script src="vista/presentacion/js/bootstrap.min.js"></script>
        <script src="vista/presentacion/js/jquery-3.3.1.min.js"></script>
        <script src="vista/presentacion/js/bootstrap.js"></script>
        <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js " ></script> 
        <script src="vista/presentacion/js/jquery.validate.js"></script> 
        <script type="text/javascript" src="vista/presentacion/js/alerta.js"></script>
        <script type="text/javascript" src="vista/presentacion/js/acceder.js"></script>
        <script type="text/javascript" src="vista/presentacion/js/recuperarcontrasenia.js"></script>
        <script type="text/javascript" src="vista/presentacion/js/perfil.js"></script>
        <script type="text/javascript" src="vista/presentacion/js/registrar.js"></script>
    </body>
</html>