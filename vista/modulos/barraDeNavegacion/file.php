<?php

$carpeta = "archivos/";
opendir($carpeta);
$destino = $carpeta.$_FILES['archivo']['name'];

copy($_FILES['archivo']['tmp_name'],$destino); 
echo "Archivo subido exitosamente";
$nombre=$_FILES['archivo']['name'];
echo "<img src=\"archivos/$nombre\"><br>";
echo $_FILES['archivo']['name']."<br>";
echo $_FILES['archivo']['size']."-Bytes<br>";
echo $_FILES['archivo']['type']."<br>";
?>