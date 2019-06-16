<?php

	$nom=$_POST['nombre'];
	$ap=$_POST['apellipa'];
	$am=$_POST['apellima'];
	$fech=$_POST['fec_na'];
	$nat=$_POST['pais'];
	$genero=$_POST['gen'];
	$telefono=$_POST['tel'];
	$nick=$_POST['nick'];
	$passw=$_POST['pass'];
	$cpassw=$_POST['cpass'];
$conexion=mysqli_connect("localhost","root","","panaderia") or die ("Error. Favor de contactar al administrador");
if(!$conexion){
	echo "Error. Ni se encuentra el servidor, favor de contactar al administrador";
}else{
	mysqli_query($conexion,"insert into `usuario` values(default, '$nom','$ap','$am','$fech','$nat','$genero','$telefono','$nick','$passw','$cpassw')") or die ("Error en consulta");
}
header('Location:index.php');
?>