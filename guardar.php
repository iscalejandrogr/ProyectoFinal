<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";
print_r($_FILES);
$new_image_name = "namethisimage.jpg";
move_uploaded_file($_FILES["file"]["tmp_name"], "images/".$new_image_name);
/*
$nom=$_POST['nomb'];
$dir=$_POST['direc'];
$rfc=$_POST['Rfc'];
$tel=$_POST['telef'];
$clasif=$_POST['classif'];
$lat=$_POST['latit'];
$longt=$_POST['longit'];
$foto=$_POST['Foto'];

$sql="INSERT INTO servicios VALUES('','$nom','$dir','$rfc','$tel','$lat','$longt','$foto','$clasif')";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se registraron de manera exitosa";
	  echo "nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Teléfono:".$tel." Clasificación:".$clasif." Latitud:".$lat." Longitud:".$longt." Foto:".$foto;
	}else{
  	echo "Se produjo un error al momento de registar los datos:".mysqli_error();
		}
mysqli_close($conexion);*/
?>
